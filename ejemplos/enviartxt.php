<?php

$cfile = new CURLFile("/var/www/html/dte.txt", 'text/xml', 'archivito');
$cuerpo = array("archivito" => $cfile, "token" => "api-key-token");
$handler = curl_init();
curl_setopt($handler, CURLOPT_URL, "https://su-api-server");
curl_setopt($handler, CURLOPT_PORT, "443");
curl_setopt($handler, CURLOPT_VERBOSE, 1);
curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($handler, CURLOPT_TIMEOUT, 30);
curl_setopt($handler, CURLOPT_POSTFIELDS, $cuerpo);
curl_setopt($handler, CURLOPT_HEADER, 0);
curl_setopt($handler, CURLINFO_HEADER_OUT, true);
$result = curl_exec($handler);
$info = curl_getinfo($handler);
curl_close($handler);

?>
