<?php

namespace ToneflixCode\FontAwesome\Icons; 

use \ToneflixCode\FontAwesome\Icons\Brands; 
use \ToneflixCode\FontAwesome\Icons\Duotones; 
use \ToneflixCode\FontAwesome\Icons\Lights; 
use \ToneflixCode\FontAwesome\Icons\Regulars; 
use \ToneflixCode\FontAwesome\Icons\Solids;  

class Loader
{  
    public function icons($icon_type = 'all', $license = 'free')
    { 
        if (!is_string($icon_type) || !in_array($icon_type, ['brands', 'duotone', 'light', 'regular', 'solid', 'all'])) {
            throw new \Exception('A valid icon type must be one of "brands, duotone, light, regular, solid, all"');
        }
        
        $_brands = $_duotones = $_lights = $_regulars = $_solids = []; 

        if ($license !== 'pro') 
        { 
            foreach(Brands::icons() as $brand) 
            {
                $_brands[]   = "fab ".$brand;
            }
        }


        if ($license !== 'pro') 
        { 
            foreach(Solids::icons() as $solid) 
            {
                $_solids[]   = "fas ".$solid;
            }
        }


        if ($license !== 'free') 
        { 
            foreach(Duotones::icons() as $duotone) 
            {
                $_duotones[] = "fad ".$duotone;
            }
        }

        if ($license !== 'free') 
        { 
            foreach(Lights::icons() as $light) 
            { 
                $_lights[]   = "fal ".$light;
            }
        } 

        if ($license !== 'free') 
        { 
            foreach(Regulars::icons() as $regular) 
            {
                $_regulars[] = "far ".$regular;
            }
        }

        switch($icon_type) {
            default:
            case "all": {
                foreach($_brands as $brand) {
                    $fa[] = $brand;
                }
                foreach($_duotones as $duotone) {
                    $fa[] = $duotone;
                }
                foreach($_lights as $light) {
                    $fa[] = $light;
                }
                foreach($_regulars as $regular) {
                    $fa[] = $regular;
                }
                foreach($_solids as $solid) {
                    $fa[] = $solid;
                }
                 break;
            }
            
            case "brands": {
                $fa = $_brands;
                break;
            }
            
            case "duotone": {
                $fa = $_duotones;
                break;
            }
            
            case "light": {
                $fa = $_lights;
                break;
            }
            
            case "regular": {
                $fa = $_regulars;
                break;
            }
            
            case "solid": {
                $fa = $_solids;
                break;
            }
        }
        
        $this->fa = $fa;
        return $this;
    }
}