# Factura Electrónica Afecta
SDK Factronica

Librería para Integración de Factura Electrónica con Software Propio

Para realizar la integración se deben realizar 3 procesos.

<h3>Procesos:</h3>
1.-Generar Archivo Plano con Formato Dte para Factura Electrónica Afecta.<br>
2.-Enviar Archivo Plano hacia Servidor de Facturación.<br>
3.-Recuperar Resultados desde Servidor de Facturación.<br>

<h3>Proceso 1: Generar Archivo Plano</h3>
Este proceso Consiste en generar un archivo de texto plano con el formato requerido.
Dentro del archivo de texto plano debe ir la siguiente información:
<br>-Datos del Servidor
<br>-Datos de Caratula
<br>-Datos de Emisor
<br>-Datos de Receptor
<br>-Datos de Detalle
<br>-Datos de Descuentos/Recargos Globales
<br>-Datos de Totales
<br>-Datos de Referencias
<br>-Datos de Timbraje ( https://github.com/FacTronica/TimbrajeElectronico )
<br>-Datos de Certificado

Desde la siguiente Url se puede obtener el Formato Requerido a Generar para Factura Electrónica Afecta.
<br>https://github.com/FacTronica/FacturaElectronicaAfecta/blob/master/FormatoFacturaElectronica.php

<h3>Proceso 2: Enviar Archivo Txt</h3>
El archivo de texto plano generado en el "Proceso 1", se debe enviar al servidor de Facturación.
<br>Para realizar este proceso se hace uso de librería opensource CURL.
A continuación ejemplos para realizar el envío del Txt al Servidor de Facturación.

<br><b>Enviar archivo txt desde Consola Windows:</b>
<br>c:\curl\curl.exe --form "archivito=@c:\curl\archivo_plano.txt" http://www.factronica.cl/sdk/ws_servidor/index.php

<b>Enviar archivo desde Consola Linux:</b>
<br>curl --form "archivito=@archivo_plano.txt" http://www.factronica.cl/sdk/ws_servidor/index.php

<b>Enviar archivo txt desde Php:</b>
$DocDte=new FactronicaWebservice(); 
$DocDte->FactronicaEnviarPost();
Más info de WebService Factronica Cliente
<br>https://github.com/FacTronica/FactronicaWebserviceCliente


<h3>Proceso 3: Recuperar el XML con Libro d Ventas:</h3>
Este proceso es necesario para poder obtener una copia del xml del libro de ventas para poder respaldarlo y posteriormente enviarlo al sii.

<br>WINDOWS:
<br>c:\curl\curl.exe -o c:\libros\libroventas201611.xml http://www.factronica.cl/factronica_webservice_servidor_beta/xml_libroventa/libroventas201611.xml

<br>LINUX:
<br>curl -o libroventas201611.xml http://www.factronica.cl/factronica_webservice_servidor_beta/xml_libroventa/libroventas201611.xml


<h3>Proceso 4: Recuperar Resultados:</h3>
Este proceso es para poder consultar al sii el estado del envío del libro.
El SII responderá con un xml con la aprobación , reparo o rechazo del envío.

Recuperar resultados desde Consola Windows:
c:\curl\curl.exe -o c:\curl\dte_rut333333333_tipo33_folio777.xml http://www.factronica.cl/sdk/ws_servidor/xml/dte_rut333333333_tipo33_folio777.xml

Recuperar resultados desde Consola Linux:
curl -o dte_rut333333333_tipo33_folio777.xml http://www.factronica.cl/sdk/ws_servidor/xml/dte_rut333333333_tipo33_folio777.xml

