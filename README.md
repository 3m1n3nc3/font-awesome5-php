# font-awesome5-php

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md) 
[![Total Downloads][ico-downloads]][link-downloads]

A PHP wrapper around [Font Awesome 5](https://fontawesome.com/) that allows you to call and use fontawesome 5 icons in your php project.

## Requirements
- PHP 5.4.0 or later
- Font Awesome 5.15.3 or later

## Install

### Via Composer

``` bash
    $ composer require toneflix-code/fontawsome5-php
```

### Via download

Download a release version from the [releases page](https://github.com/3m1n3nc3/font-awesome5-php/releases).
Extract, then:
``` php
    require 'path/to/src/autoload.php';
```

## Usage

### 0. First Things
This library does not provide Font Awesome so make sure you fulfill that dependency
Depending on what FontAwesome you own, **`LICENSE`** may need to be set to any of **`[free, pro, all]`** and also **`$icon_type`** may need to be set to any of **`[brands, duotone, light, regular, solid, all]`**

### 1. Initialize
Initialize by calling to the `FontAwesome()` Class

```php
    $font_awesome = new \ToneflixCode\FontAwesome(LICENSE);
```

### 2. Icons Array
To get an array of all icons available to your provided params:
```php
    $icon_type = "solid";   //The type of icons you are requesting for
    $icons     = $font_awesome->icons($icon_type);
    print_r($icons);
``` 

### 3. Html Select
The library can help you generate a html select with icons set as options and example of what to expect would be:
```html
    <select name="icon" class="icon-class">
        <option value="fas fa-fa-500px">500px</option>
    </select>
```
Implementation can easily be done
```php
    $icon_type = "solid";           //The type of icons you are requesting for
    $selected  = 'fas fa-fa-500px'; //The currently selected icon
    $class     = "form-control";    //The class to be added to select html element
    $titles    = true;              //Setting this to true will apply a ucwords() function 
                                    //and remove all [-] to an icon then make it a title

    $icons     = $font_awesome->selector($selected, $class, $titles, $icon_type);
    echo $icons;
``` 

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/toneflix-code/fontawsome5-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square 
[ico-downloads]: https://img.shields.io/packagist/dt/toneflix-code/fontawsome5-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/toneflix-code/fontawsome5-php 
[link-downloads]: https://packagist.org/packages/toneflix-code/fontawsome5-php
[link-author]: https://github.com/3m1n3nc3  
