<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;

    public static function getMenuType($type){
        $return = '';

        switch($type){
            case 1:
                $return = "Breakfast";
                break;
            case 2:
                $return = "Lunch";
                break;
            case 3:
                $return = "Dinner";
                break;
            default:
                $return = "Unknown";
        }

        return $return;
    }
}
