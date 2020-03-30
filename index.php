<?php
       
        include 'geo/geoplugin.class.php';
        include 'geo/geoip.inc';
        $gi = geoip_open("geo/GeoIP.dat", "");

        $ip = $_SERVER['REMOTE_ADDR'] ;

        $geoplugin = new geoPlugin();

       $geoplugin->locate();
       $country = geoip_country_id_by_addr($gi, $ip);
        
        $flag = '<img src="img/flags/'.strtolower(geoip_country_code_by_addr($gi,$ip)).'.png">';


        echo "{$geoplugin->countryName}&nbsp";
        echo "$flag";

?>