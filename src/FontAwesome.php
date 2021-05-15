<?php

namespace ToneflixCode;

use \ToneflixCode\FontAwesome\Icons\Loader;  
use \ToneflixCode\FontAwesome\Processor;  

class FontAwesome
{
    public $license;  
    const VERSION = "5.15.3";

    public function __construct($license)
    {
        if (!is_string($license) || !in_array($license, ['pro', 'free', 'all'])) {
            throw new \Exception('A valid icon type must be one of "pro, free, all"');
        }
        $this->license = $license;
    }


    public function icons($icon_type='all')
    {
        $loader = new Loader;
        return $loader->icons($icon_type, $this->license);
    }

    public function selector($selected = '', $class = "form-control", $titles = true, $icon_type = 'all')
    {
        $processor = new Processor;
        return $processor->selector($icon_type, $this->license, $selected, $class, $titles);
    }


    /**
     * @deprecated
     */
    public static function registerAutoloader()
    {
        trigger_error('Include "src/autoload.php" instead', E_DEPRECATED | E_USER_NOTICE);
        require_once(__DIR__ . '/../src/autoload.php');
    } 
}
