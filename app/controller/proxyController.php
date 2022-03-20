<?php

function curlFile($channel_name, $page, $proxy_ip, $proxy_port, $loginpassw)
{

    /* Validation channel name */
    if (isset($channel_name)) {
        $api_url = "https://stardeos.com/api/v2/channels/" . $channel_name . "/videos?page=" . $page;
    } else {
        $api_url = "https://stardeos.com/api/v2/channels/" . $_GET["channel"] . "/videos?page=" . $page;
    }

   $responseHTTP = getHTTPResponseStatusCode($api_url);

    switch ($responseHTTP) {
        case '200 OK':
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $api_url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
            curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
            curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
            $data = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($data, true);
            return $response;
            break;

            case '403 Forbidden':
               echo "Stardeos ha bloqueado el acceso al servidor de videos para <strong>Stardeos2Mate</strong>, pronto más detalles para la versión 1.1 <br>";
            break;
    }
   
}
