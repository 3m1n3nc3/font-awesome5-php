<?php

/**
 * ToneflixCode FontAwesome Autoloader
 * For use when library is being used without composer
 */

$fa_autoloader = function ($class_name) {
    if (strpos($class_name, 'ToneflixCode\FontAwesome')===0) {
        $file = dirname(__FILE__) . DIRECTORY_SEPARATOR;
        $file .= str_replace([ 'ToneflixCode\\', '\\' ], ['', DIRECTORY_SEPARATOR ], $class_name) . '.php';
        include_once $file;
    }
};

spl_autoload_register($fa_autoloader);

return $fa_autoloader;
