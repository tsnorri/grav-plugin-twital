# Grav Twital Plugin

Enable the use of [Twital templates](https://github.com/goetas/twital) with [Grav CMS](http://github.com/getgrav/grav). This is done by using the `onTwigLoader` event to replace `Twig_Loader_Filesystem` with `Goetas\Twital\TwitalLoader`.

## Installation

Installing the Grav Twital plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

Twital may be installed with [Composer](https://getcomposer.org).

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install grav-twital

This will install the Grav Twital plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/grav-twital`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `grav-twital`. You can find these files on [GitHub](https://github.com/tsnorri/grav-plugin-twital) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/grav-twital
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/grav-twital/grav-twital.yaml` to `user/config/plugins/grav-twital.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage

After enabling the plugin please refer to <https://github.com/goetas/twital>.
