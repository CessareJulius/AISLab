<?php 

namespace App;

class UserDate
{
    public static function created($date)
    {
    	$date = explode('-', $date);

    	$dayTime = explode(' ', $date[2]);

    	return $dayTime[0]."/".$date[1]."/".$date[0];
    }

    public static function updated($date)
    {
    	$date = explode('-', $date);

    	$dayTime = explode(' ', $date[2]);

    	return $dayTime[0]."/".$date[1]."/".$date[0];
    }
}



