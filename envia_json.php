<?php
#
# MOSTRAR TIPO DE ERRORES
error_reporting(E_ERROR|E_WARNING);
#
# MOSTRAR ERRORES
ini_set('display_errors', '1');
#
# FUNCION PARA ENVIAR JSON A UNA URL
function JsonEnviar($arregloJson,$url){
    //
    global $FACTRONICA;
    //
    $payload = json_encode($arregloJson);
    #
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_PORT,$FACTRONICA["CURL_PUERTO"]);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER,array("Content-type: application/json"));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS,$payload);
    $json_response = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    #
    return $json_response; 
}
#
# PUERTO DE CONEXION 443 o 80
$FACTRONICA["CURL_PUERTO"]=443;


#########################################
# INCLUIR EL JSON CON LOS DATOS
#########################################
#
include("json_factura.php");

 
 
#########################################
# URL DE DESTINO DEL SERVIDOR 
#########################################
#
$url_api="https://servidor3.factronica.cl/api/factronica_creadte_facturas";
#
$url=$url_api."/index.php";



#########################################
# ALMACENAR LA RESPUESTA DEL SERVIDOR
#########################################
$retorno=JsonEnviar($arregloJson,$url);




#########################################
# DECODIFICAR LA RESPUESTA
#########################################
#
# TRANSFORMAR LA RESPUESTA EN UN ARREGLO
$jsonArray  = json_decode($retorno,true);



#########################################
# DEPURAR RESPUESTA
#########################################
#
# MOSTRAR LA RESPUESTA DE FORMA LEGIBLE
echo "<pre>";
var_dump($jsonArray);
echo "</pre>";




#########################################
# DESCARGAR ARCHIVOS XML Y PDF
#########################################
#
# TRANSFORMAR A TEXTO LEGIBLE LA URL PARA DESCARGAR EL PDF
$url_pdf=base64_decode($jsonArray["urlpdf"]);
#
# TRANSFORMAR A TEXTO LEGIBLE LA URL PARA DESCARGAR EL PDF
$url_pdf_ticket=base64_decode($jsonArray["urlpdfticket"]);
//
echo "<br><a href='".$url_pdf."'>Descargar Pdf Formato Carta</a>";
//
echo "<br><a href='".$url_pdf_ticket."'>Descargar Pdf Formato Ticket</a>"; 
 
 
 
 
#########################################
# DESCARGAR LOS XML'S
#########################################
#
$carpeta=$jsonArray["carpeta"];
#
$archivo=$jsonArray["urlxmlcliente"];
echo "<br><a href='$url_api/descarga_forzada.php?archivo=$archivo&carpeta=$carpeta'>Descargar XML CLIENTE</a>"; 
#
$archivo=$jsonArray["urlxmlsii"];
echo "<br><a href='$url_api/descarga_forzada.php?archivo=$archivo&carpeta=$carpeta'>Descargar XML SII</a>"; 
#
$archivo=$jsonArray["urlxmldte"];
echo "<br><a href='$url_api/descarga_forzada.php?archivo=$archivo&carpeta=$carpeta'>Descargar XML DTE</a>"; 
 
 
 

 
?>
