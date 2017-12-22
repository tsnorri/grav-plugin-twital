<?php
/*
 * Copyright (c) 2017 Tuukka Norri
 * This code is licensed under MIT license (see LICENSE for details).
 */

namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class GravTwitalPlugin
 * @package Grav\Plugin
 */
class GravTwitalPlugin extends Plugin
{
	protected $config = null;
	
	
	public static function getSubscribedEvents()
	{
		return [
			'onPluginsInitialized' => ['onPluginsInitialized', 0]
		];
	}
	
	
	public function onPluginsInitialized()
	{
		if ($this->isAdmin())
		{
			$this->active = false;
			return;
		}
		
		$this->enable([
			'onTwigLoader' => ['onTwigLoader', 0]
		]);
	}
	
	
	public function onTwigLoader(Event $e)
	{
		// Instantiate a TwitalLoader with the file loader that was just created.
		$twig = $this->grav['twig'];
		$fileLoader = $twig->loader();
		$twitalLoader = new \Goetas\Twital\TwitalLoader($fileLoader, null, false);
		
		// Add source adapters since the defaults are not used.
		// Just use HTML 5 for .html.twig since Grav does not allow any other file name extension.
		$twitalLoader->addSourceAdapter('/\.html\.twig$/i', new \Goetas\Twital\SourceAdapter\HTML5Adapter());
		
		// Replace the file loader with the Twital loader.
		// In order to do this, create a member function to bypass access specifiers.
		$closure = function ($val) {
			$this->loader = $val;
		};
		
		// Bind the function to the object and call it.
		$bound = \Closure::bind($closure, $twig, get_class($twig));
		$bound($twitalLoader);
	}
}
