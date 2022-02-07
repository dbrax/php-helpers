<?php

use Illuminate\Support\Facades\Crypt;

/**
 * This function will convert array to json 
 */
if (!function_exists('tojson')) {
    function tojson($value)
    {


        return json_encode($value);
    }
}


/**
 * This function will convert json to array 
 */
if (!function_exists('toarray')) {
    function toarray($value)
    {

        return json_decode($value);
    }
}


/**
 * This function will encrypt a value
 */
if (!function_exists('encrypt')) {
    function encrypt($value)
    {

        return Crypt::encrypt($value);
    }
}


if (!function_exists('format_tzmobile_number')) {


    function format_tzmobile_number($number)
    {

        $usernumber = "";
        if (substr($number, 0, 1) == "0") {
            $usernumber = substr($number, 1);

            $usernumber = "255" . $usernumber;
        } else
            $usernumber = $number;


        return $usernumber;
    }
}
