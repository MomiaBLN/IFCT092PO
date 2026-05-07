<?php
function ObtenerDeUrl(string $url) : string {
    $handle = curl_init($url);
    
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

    return curl_exec($handle);
}

$result = ObtenerDeUrl(API_URL);
$data = json_decode($result, true);

extract($data);
?>