<?php
error_reporting(0);
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$PublicIP = get_client_ip();
$json  = file_get_contents("http://api.ipstack.com/$PublicIP?access_key=[YOUR API KEY]");
$json  =  json_decode($json ,true);
//print_r($json);

$continent_name = $json['continent_name'];
$country_code	= $json['country_code'];
$country_name   = $json['country_name'];
$region_code    = $json['region_code'];
$region_name    = $json['region_name'];
$city           = $json['city'];
$zip            = $json['zip'];
$latitude       = $json['latitude'];
$longitude      = $json['longitude'];

?>