# Bootstrap Sub-theme
* [Requirements](#requirements)
* [File Structure](#file-structure)
* [bootstrap_subtheme.info](#bootstrap_subthemeinfo)
* [template.php](#templatephp)
* [Icons](#icons)

## Requirements
* [Bootstrap Base Theme](http://drupal.org/project/bootstrap) - 7.x-2.0-beta3 or higher.
* [Bootstrap Source](https://github.com/twitter/bootstrap/tags) - Version 2.3.1 or higher.
* [jQuery Update](http://drupal.org/project/jquery_update) - 7.x-2.3 or higher. Bootstrap requires a minimum jQuery version of 1.7 or higher. You must manually set this in the configuration upon install.
* Either a local LESS preprocessor or install and enable the [LESS](http://drupal.org/project/less) module - 7.x-3.0-beta1 or higher (see [bootstrap_subtheme.info](#bootstrap_subthemeinfo)).

## File Structure
Downloaded and extract the [Bootstrap Source](https://github.com/twitter/bootstrap/) into this sub-theme. After it has been extracted, the folder should be named `bootstrap`. Once downloaded and extracted, you will not need to touch these files again. This allows the framework to be updated in the future.

Everything you will need to customize this sub-theme is located in the `../less` folder. Specifically, typically the only files that really need to be modified would be:

```
../less/variables.less
../less/header.less
../less/content.less
../less/footer.less
```

The `../less/theme.less` file is what imports all the files together. If needed, you can add more files.

<img src="http://grab.by/kOMU" alt="Drupal Bootstrap Sub-Theme File Structure" />

## bootstrap_subtheme.info
Aside from renaming this file and the theme name inside it, you should be able to leave this file untouched. A possible and necessary change might be to modify the stylesheet include from `css/theme.css` to `less/theme.less` if using the LESS module to compile the theme.

## template.php
This file contains the necessary `hook_js_alter()` function for removing the base theme's JavaScript and adding the one provided by this sub-theme.

## Icons
By default, Bootstrap comes packaged with [Glyphicons](http://twitter.github.com/bootstrap/base-css.html#icons). However, it is highly recommended that you either install the [Fontello Module](http://drupal.org/project/fontello) - 7.x-1.0-beta3 or higher. After enabling the module, navigate to the [Fontello Website](http://fontello.com), select the icons you desire (or if unsure, select all the "Font Awesome" icons), click the big red "Download webfont" button in the top right and save to your computer. In your site, navigate to the Fontello administration page and upload the webfont bundle directly into your site.