<?php

namespace ToneflixCode\FontAwesome;  

use \ToneflixCode\FontAwesome\Icons\Loader;  

class Processor
{
    private $sel_name_attr;
    private $sel_class;
    private $sel_selected;

    public function set_name(string $name): object
    {
        $this->sel_name_attr = $name;
        return $this;
    }

    public function set_class(string $name): object
    {
        $this->sel_class = $name;
        return $this;
    }

    public function set_selected(string $selected): object
    {
        $this->sel_selected = $selected;
        return $this;
    }

    /**
     * Font Awesome icon selector
    */
    public function selector($icon_type = 'all', $license = 'free', $selected = "", $class = "form-control", $titles = true) 
    {           
        $loader = new Loader;
        $pack   = $loader->icons($icon_type, $license)->fa; 

        $sel_name = $this->sel_name_attr ?? 'icon';
        $class    = $this->sel_class ?? $class;
        $selected = $this->sel_selected ?? $selected; 

        $rows = "\n<select name=\"$sel_name\" class=\"$class\">\n";
        foreach($pack as $key => $icon) 
        {
            $icon_title = str_replace(['fa ', 'fab ', 'fad ', 'fal ', 'far ', 'fas ', ' fa-', 'fa-'], '', $icon);
            $icon_title = ucwords(str_replace('-', ' ', $icon_title)); 

            $selected = ($selected === $icon)? ' selected="selected"' : ''; 

            $rows .= "\t<option value=\"$icon\"$selected>" . ($titles === true ? $icon_title : $icon) . "</option>\n";
        }

        $rows .= "</select> \n";

        return $rows; 
    }
}