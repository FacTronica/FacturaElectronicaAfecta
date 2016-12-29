# Factura Electrónica Afecta
SDK Factronica
<br>A continuación se detalla el Procedimiento para realizar la Emisión de Documentos Electrónicos con Software Propio.
<h3>Procesos a Realizar:</h3>
1.-Generar Archivo Plano TXT
<br>2.-Enviar Archivo Plano TXT al Servidor de Facturación
<br>3.-Recuperar Archivo XML con TrackID
<br>4.-Recuperar Archivo XML con Documento Electrónico
<br>5.-Recuperar Archivo PDF con Documento Electrónico
<hr>
<h3>Proceso 1: Generar Archivo Plano</h3>
Este proceso Consiste en generar un archivo de texto plano con el formato requerido por el sdk de factronica.
<br>Dentro del archivo de texto plano debe ir la información que compone al documento emitido:
<br><b>Información Requerida para construir el TXT:</b>
<br>-Datos del Servidor de Facturación
<br>-Datos de Caratula
<br>-Datos de Emisor
<br>-Datos de Receptor
<br>-Datos de Detalle
<br>-Datos de Descuentos/Recargos Globales
<br>-Datos de Totales
<br>-Datos de Referencias
<br>-Datos de Timbraje
<br>-Datos de Certificado
<br>Ver Formato del archivo TXT para Factura Electrónica Afecta.
<br>https://github.com/FacTronica/FacturaElectronicaAfecta/blob/master/FormatoFacturaElectronica.php
<br>
<hr>
<h3>Proceso 2: Enviar Archivo Txt</h3>
Para enviar el archivo plano TXT al servidor de Facturación se hace uso de librería opensource CURL.
<br><br><b>Enviar archivo txt desde Consola Windows:</b>
<br>c:\curl\curl.exe --form "archivito=@c:\curl\archivo_plano.txt" http://www.factronica.cl/factronica_webservice_servidor_beta/index.php
<br><br><b>Enviar archivo desde Consola Linux:</b>
<br>curl --form "archivito=@archivo_plano.txt" http://www.factronica.cl/factronica_webservice_servidor_beta/index.php
<br>
<hr>
<h3>Proceso 3: Recuperar el XML con TrackID:</h3>
Este proceso es necesario para poder validar que el SII Chile haya recibido el documento emitido.
<br><br><b>Recuperar archivo xml con Windows:</b>
<br>c:\curl\curl.exe -o c:\curl\factura_folio777_tipo33_trackid.xml http://www.factronica.cl/factronica_webservice_servidor_beta/trackid/factura_folio777_tipo33_trackid.xml
<br><br><b>Recuperar Archivo Xml con Linux:</b>
<br>curl -o factura_folio777_tipo33_trackid.xml http://www.factronica.cl/factronica_webservice_servidor_beta/trackid/factura_folio777_tipo33_trackid.xml
<br>
<hr>
<h3>Proceso 4: Recuperar el PDF con Documento Electrónico:</h3>
Este proceso es necesario para poder obtener una copia del pdf del documento electrónico.
<br><br><b>Recuperar archivo Pdf con Windows:</b>
<br>c:\curl\curl.exe -o c:\curl\factura_folio777_tipo33.pdf http://www.factronica.cl/factronica_webservice_servidor_beta/pdf/factura_folio777_tipo33.pdf
<br><br><b>Recuperar archivo Pdf con Linux:</b>
<br>curl -o factura_folio777_tipo33.pdf http://www.factronica.cl/factronica_webservice_servidor_beta/pdf/factura_folio777_tipo33.pdf
<br>
<hr>
<h3>Proceso 5: Recuperar el XML con Documento Electrónico:</h3>
Este proceso es necesario para poder obtener una copia del xml del documento electrónico.
<br><br><b>Recuperar archivo Xml con Windows:</b>
<br>c:\curl\curl.exe -o c:\curl\factura_folio777_tipo33.xml http://www.factronica.cl/factronica_webservice_servidor_beta/xml/factura_folio777_tipo33.xml
<br><br><b>Recuperar archivo Xml con linux:</b>
<br>curl -o factura_folio777_tipo33.xml http://www.factronica.cl/factronica_webservice_servidor_beta/xml/factura_folio777_tipo33.xml
