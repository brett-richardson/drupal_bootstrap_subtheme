# Bootstrap Sub-theme
* [Requirements](#requirements)
* [File Structure](#file-structure)
* [bootstrap_subtheme.info](#bootstrap_subthemeinfo)
* [template.php](#templatephp)
* [Icons](#icons)

## Requirements
* [Bootstrap Base Theme](http://drupal.org/project/bootstrap) - 7.x-2.0-beta3 or higher (must be enabled).
* [Bootstrap Source](https://github.com/twitter/bootstrap/tags) - Version 2.3.1 or higher.
* [jQuery Update](http://drupal.org/project/jquery_update) - 7.x-2.3 or higher. Bootstrap requires a minimum jQuery version of 1.7 or higher. You must manually set this in the configuration upon install.
* Either a local LESS preprocessor or install and enable the [LESS](http://drupal.org/project/less) module - 7.x-3.0-beta1 or higher (see [bootstrap_subtheme.info](#bootstrap_subthemeinfo)).

## File Structure
Downloaded and extract the [Bootstrap Source](https://github.com/twitter/bootstrap/) into this sub-theme. After it has been extracted, the folder should be named `bootstrap`. Once downloaded and extracted, you will not need to touch these files again. This allows the framework to be updated in the future.

NOTE: Anything you need to customize will be located in the `../less` folder of the subtheme, NOT `../bootstrap`. The following files are simply duplicates from the Bootstrap libary. In theory, you could update them by copying them from the Bootstrap framework again. Just make sure to modifiy the import paths to reference the `../bootstrap/less` folder:
```
../less/bootstrap.less
../less/responsive.less
../less/variables.less
```

The `../less/variables.less` file is generally where you will spend most of your time customizing the various Bootstrap settings. Feel free to manually edit it or even replace it with a service like [BootTheme](http://www.boottheme.com).

The `../less/fixes.less` file contains various Bootstrap and Drupal fixes. It may contain a few enhancements, feel free to edit this file as you see fit.

The following files are relatively blank (they may contain some code for the inital sub-theme), but this is where you will actually spend most of your time specifying specific styling for your sites configuration.
```
../less/header.less
../less/content.less
../less/footer.less
```

And finally, the `../less/theme.less` file is the glue that holds it all together and compiles everything into one file. Generally, you will not need to modify this file unless you need to add or remove imported files. For example, if you do not want your site to have responsive capabilities, free to comment or remove that line. If you are a file hierarchy wizard and need to separate your theme into multiple files, insert additional `@import '...';` lines. 

<img src="http://i.snag.gy/GtISs.jpg" alt="Drupal Bootstrap Sub-Theme File Structure" />

## bootstrap_subtheme.info
Aside from renaming the folder, this file and the theme name inside it, you should be able to leave this file untouched. A possible and necessary change might be to modify the stylesheet include from `css/theme.css` to `less/theme.less` if using the LESS module to compile the theme.

## template.php
This file contains the necessary `hook_js_alter()` function for removing the base theme's JavaScript and adding the one provided by this sub-theme. It also contains a `hook_preprocess_region()` function for adding a `row-fluid` class to all blockgroup regions if the module is installed.

## Icons
By default, this sub-theme is under the assumption that you will be using the [Fontello Module](http://drupal.org/project/fontello) - 7.x-1.0-beta3 or higher for icons. Bootstrap does come packaged with [Glyphicons](http://twitter.github.com/bootstrap/base-css.html#icons), however given the limited capability of a static sprite image, it is not recommended for use. If for whatever reason you need to use the icons that come with the default Bootstrap framework, uncomment or add the line `@import "../bootstrap/less/sprites.less";` in `../less/bootstrap.less`.
