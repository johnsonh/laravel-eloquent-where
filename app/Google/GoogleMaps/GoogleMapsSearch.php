<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 3/4/14
 * Time: 1:18 AM
 */

namespace Google\GoogleMaps;

class GoogleMapsSearch {

    //https://maps.googleapis.com/maps/api/geocode/json?address=los+angeles&sensor=true
    public function getResults($address)
    {
        $formatted = str_replace(' ', '+', $address);

        $endpoint = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        $endpoint .= $formatted;
        $endpoint .= '&sensor=true';

        //echo $endpoint;

        $json = file_get_contents($endpoint);
        return json_decode($json);
    }



}