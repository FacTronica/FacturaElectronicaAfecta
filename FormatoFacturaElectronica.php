<?php 
############################################################## 
#######	PARAMETROS DE CONFIGURACIÓN
##############################################################
#
# ENVIAR XML AL SII 0=NOENVIAR 1=CERTIFICACION 2=PRODUCCION
$sw_produccion="1";
#
# ENVIAR MAIL CON XML Y PDF AL CORREO DE INTERCAMBIO REGISTRADO EN EL SII 1=SI 0=NO
$sw_enviar_intercambio="1";
#
# ENVIAR XML AL SII 0=NO 1=SI
$sw_enviar_sii="1";
#
# ENVIAR MAIL CON XML AL EMISOR 1=SI 0=NO
$sw_enviar_emisor="1";
#
# ENVIAR MAIL CON XML AL RECEPTOR 1=SI 0=NO
$sw_enviar_receptor="1";
#
# SISTEMA OPERATIVO DEL SERVIDOR LINUX - WINDOWS
$separador_carpetas="LINUX"; 
#
# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png 
$url_logo="";//http://192.168.0.203/home/766067166/logo.png";
#
$url_logo_central="";//http://192.168.0.203/home/766067166/logo_central.png";
#
# INDICA LA CANTIDAD DE DECIMALES A MOSTRAR EN EL PDF Y XML
$decimales_item_unitario="0";
#
# INDICA LA CANTIDAD DE ESPACIADO ENTRE CADA LINEA DEL DETALLE
$espaciado_items="8";
############################################################## 
#######	CARATULA
##############################################################
#
# RUT DEL CONTRIBUYENTE EMISOR
$caratula["RutEmisor"]="76606716-6"; 
#
# RUT AUTORIZADO A ENVIAR DTES AL SII SIEMPRE ES RUT DE PERSONA NO DE EMPRESA
$caratula["RutEnvia"]="13347732-2";
#
# EN MODO CERTIFICACION RUT=60803000-K
$caratula["RutReceptor"]="60803000-K";  
#
# FECHA DE RESOLUCIÓN DE INICIO EN FACTURA ELECTRONICA
$caratula["FchResol"]="2014-08-22"; 
#
# CERTIFICACION NUM=CERO
$caratula["NroResol"]="80"; 
#
# NOMBRE SUCURSAL SII
$caratula["SucSii"]="SANTIAGO ORIENTE"; 
#
##############################################################   
#######	ENCABEZADO
############################################################## 
#
# FECHA DE EMISIÓN
$IdDoc["FchEmis"]="2017-08-09"; 
#
# FECHA DE VENCIMIENTO AAAA-MM-DD
$IdDoc["FchVenc"]="2017-08-09"; 	
#
# TEXTO FORMA DE PAGO
$IdDoc["TermPagoGlosa"]="0"; 
#
# TIPO DE DOCUMENTO FV=33, ND=56, NC=61
$IdDoc["TipoDTE"]="33"; 
#
# FOLIO DEL DOCUMENTO
$IdDoc["Folio"]="7237"; 
#
# entre caso y num hay 2 espacios blancos
$IdDoc["RazonRef"]=""; 
#
# PARA USO EN GUIA DESPACHO
$IdDoc["TipoDespacho"]="";  
#
# PARA USO EN GUIA DESPACHO
$IdDoc["IndTraslado"]="";  
#
# VALORES DETALLE EN BRUTO
$IdDoc["MntBruto"]="0"; 

$IdDoc["Observaciones"]="PRUEBA REAL";

############################################################## 
#######	EMISOR
##############################################################
#
# RUT EMISOR
$Emisor["RUTEmisor"]="76606716-6";  
#
# RAZON SOCIAL EMISOR
$Emisor["RznSoc"]="FACTRONICA SPA"; 
#
# GIRO EMISOR
$Emisor["GiroEmis"]="SERVICIOS INTEGRALES DE INFORMATICA";
#
# CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL
$Emisor["Acteco"]="523930"; 
#
# CODIGO DE LA SUCURSAL DEL SII
$Emisor["CdgSIISucur"]="15108"; 
#
# DIRECCION EMISOR
$Emisor["DirOrigen"]="CALLAO 3037";
#
# COMUNA EMISOR
$Emisor["CmnaOrigen"]="LAS CONDES";
#
# CIUDAD EMISOR
$Emisor["CiudadOrigen"]="SANTIAGO";
#
# CODIGO DEl VENDEDOR    
$Emisor["CdgVendedor"]="PATRICIO";
#
# EMAIL EMISOR
$Emisor["CorreoEmisor"]="respaldos@gmail.com";
#
# WEB EMISOR
$Emisor["Web"]="WWW.FACTRONICA.CL";
#
# FONO EMISOR
$Emisor["Telefono"]="22 502 5042";
#
# FAX EMISOR
$Emisor["Fax"]="22 983 6389";
############################################################## 
#######	RECEPTOR
##############################################################
#
# RUT RECEPTOR
$Receptor["RUTRecep"]="76606716-6"; 
#
# RUT RECEPTOR
$Receptor["CdgIntRecep"]=""; 
#
# RAZON SOCIAL RECEPTOR
$Receptor["RznSocRecep"]="FACTRONICA SPA";
#
# GIRO RECEPTOR
$Receptor["GiroRecep"]="SERVICIOS INFORMATICOS";
#
# DIRECCION RECEPTOR
$Receptor["DirRecep"]="CALLAO 3037";
#
# COMUNA RECEPTOR
$Receptor["CmnaRecep"]="LAS CONDES";
#
# CIUDAD RECEPTOR
$Receptor["CiudadRecep"]="SANTIAGO";
#
# CONTACTO RECEPTOR
$Receptor["Contacto"]="PATRICIO DIAZ";
#
# CORREO RECEPTOR
$Receptor["CorreoRecep"]="pruebas@factronica.cl";
#
##############################################################
#######	TOTALES	
##############################################################
#
# TASA DE IMPUESTO
$Totales["TasaIVA"]="19";
#
# NETO AFECTO
$Totales["MntNeto"]="100";
#
# NETO EXENTO
$Totales["MntExe"]="0";
#
# MONTO IVA
$Totales["IVA"]="19"; 
#
# TOTAL OTROS IMPUESTOS
$Totales["OtrosImpuestos"]="0"; 
#
# MONTO TOTAL BRUTO
$Totales["MntTotal"]="119";  
#
# % DESCUENTO GLOBAL AFECTO
$Totales["porcdescuento_afecto"]="";
#
# % DESCUENTO GLOBAL EXENTO
$Totales["porcdescuento_exento"]="";
#
##############################################################
#######	 DETALLE
##############################################################
#
#
# LINEA 1 DEL DOCUMENTO
$detalle["1"]["NroLinDet"]="1"; # NUMERO DE LINEA
$detalle["1"]["NmbItem"]="ERP FACTRONICA LICENCIA USO PLAN 1"; # NOMBRE DEL ITEM
$detalle["1"]["TpoCodigo"]="INT1"; # TIPO DE CODIGO P=PRODUCTO C=CUENTA M=MATERIAPRIMA I=INSUMO
$detalle["1"]["UnmdItem"]="UF"; # UNIDAD DE MEDIDA DEL ITEM KG=KILOGRAMO
$detalle["1"]["QtyItem"]="1.00000"; # CANTIDAD DE UNDS.
$detalle["1"]["VlrCodigo"]="10001"; # CODIGO ITEM
$detalle["1"]["PrcItem"]="100.00"; # PRECIO UNITARIO
$detalle["1"]["DscItem"]=""; 
$detalle["1"]["MontoItem"]="100"; # MONTO TOTAL DEL ITEM
$detalle["1"]["DscItemPesos"]="0"; # DESCUENTO PESOS ITEM
$detalle["1"]["IndExe"]="0"; # ITEMS EXENTOS 1=SI 0=NO
$detalle["1"]["DescuentoPct"]="0.00"; # DESCUENTO PORC. ITEM
$detalle["1"]["TpoCodigo2"]=""; 
$detalle["1"]["VlrCodigo2"]=""; 
#

############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="3Evs/vMu1UJez1JZNuoQa3QwCFeqn8CtPnCLyzlTc+brSWHbOy0ZAmI4dYIdMHgQ
q6Beqqzx8f0RKPaXRjbIm5EyTHvElb/KrrvmhwoKD4OjLyMav+RClz6MLsIHIK3o
KLV11jyqQTkNJu6XWtk9ePx8EDUY/fso7DxI+DXR3qex9xWUaNuEhg3RWukvpEvF
ISxgN1velg85buOnbEvl9w=="; 
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGVTCCBT2gAwIBAgIIN0Odf5ZdrrQwDQYJKoZIhvcNAQELBQAwga8xCzAJBgNV
BAYTAkNMMRQwEgYDVQQKDAtFLVNpZ24gUy5BLjE5MDcGA1UECwwwVGVybXMgb2Yg
dXNlIGF0IHd3dy5lc2lnbi1sYS5jb20vYWN1ZXJkb3RlcmNlcm9zMSswKQYDVQQD
g/DZ4TOJRJlnxVHXzfQmxvnjGOnDaTJhm+5uUej8msZGoGAMR8k56JSnmRh7dRT1
2eEceHm7Es6FhKe+msn/cbZcwdEpgbc6GxKl8/lqMOP4n/W16pJvEFbErfNx1lWN
S5WverP6/eR6f4ZjaC9kAHeurMM+VjVGgVUm5D1c4PY35x6P3YlerGHGvZF04Mu0
U576Lp2YSjQF7HRaR8IbYYah0y1wecViZceF+8uLdFyPf0zMIt2XlMfUWiC261qY
Geg712RU7XOVlhHVdEPuVmX9QT03QugrCapF2fOIJATt1LFMtPprPW8=";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIIEpgIBAAKCAQEA3Evs/vMu1UJez1JZNuoQa3QwCFeqn8CtPnCLyzlTc+brSWHb
Oy0ZAmI4dYIdMHgQq6Beqqzx8f0RKPaXRjbIm5EyTHvElb/KrrvmhwoKD4OjLyMa
v+RClz6MLsIHIK3odqbY/HHbooDUW1aIOV2QppP2LAZ5c4xPfIoELj1JEn+D9l3+
VUn1Aran60QWhdAMPEuLwcsX/3DfeifSLmLj6VFZ3F5Jc+FA2i61zUi5SaPHBkwb
Kb9A/3IBAoGBANF1tybeUUK3YPS8PSWBbRnZp1/hBEYmfN5yeT/jktJBuNLl4WDt
SRvAGNoKD6YfhHj2itzu90rcfh3vR7YBavlEZXRCjIraFEGsWur67yXGC4itwwTl
0LAgY57ZAD7fvWeGsTxKfYbgrjVd9rh528fN76rk2LOAgw418hbSqPcg
-----END RSA PRIVATE KEY-----"; 
##############################################################
#######	CARGAR DATOS DE TIMBRAJE DE FOLIOS
##############################################################
# RUT EMISOR
$CAF["RE"]="76606716-6";
#
#
# RAZON SOCIAL EMISOR
$CAF["RS"]="FACTRONICA SPA";
#
#
# TIPO DE DOCUMENTO
$CAF["TD"]="33";
#
#
# FOLIO DESDE
$CAF["RNG_D"]="7184";
#
#
# FOLIO HASTA
$CAF["RNG_H"]="7282";
#
#
# FECHA AUTORIZACION TIMBRAJE
$CAF["FA"]="2017-06-22";
#
#
# MODULO LLAVE PRIVADA TIMBRAJE
$CAF["RSAPK_M"]="wBnRXOlXYSj/LF7utaxuO1g7G6eqd4Qm4R/3xpE6heK9iXdhqsvz7fOBCZt+q0jfQjpjKxItqIGOohrGnZtBIQ==";
#
#
# MODULO EXPONENTE TIMBRAJE
$CAF["RSAPK_E"]="Aw==";
#
#
# INDICE DEL TIMBRAJE
$CAF["RSAPK_IDK"]="300";
#
#
# FIRMA DEL TIMBRAJE
$CAF["FRMA"]="mTX0KLAaKXpdsoXHnV64l9IbtEkBi2EIRcdj3GokiTLJ1JG6e7urvU+bD3OwoepMO9yWseNrirYg+OVSROKThw==";
#
#
# LLAVE PRIVADA DEL TIMBRAJE
$CAF["RSASK"]="-----BEGIN RSA PRIVATE KEY-----
MIIBOgIBAAJBAMAZ0VzpV2Eo/yxe7rWsbjtYOxunqneEJuEf98aROoXivYl3YarL
pSm0kR9tVAOXAiEAhXxkt8yXCqJhAK96BT+ntdptY7oQjKABPya0nleAJccCIG1S
aZmhP/Ymc+cewUg+TbZeQ7ASsYUJfE7EYqOwYVA6
-----END RSA PRIVATE KEY-----
";
#
#
# LLAVE PUBLICA DEL TIMBRAJE
$CAF["RSAPUBK"]="-----BEGIN PUBLIC KEY-----
MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBAMAZ0VzpV2Eo/yxe7rWsbjtYOxunqneE
JuEf98aROoXivYl3YarL8+3zgQmbfqtI30I6YysSLaiBjqIaxp2bQSECAQM=
-----END PUBLIC KEY-----
";
#
$FACTRONICA["FOLDERPDF"]="../home/769141901";
$FACTRONICA["FILEPDF"]="FOLIO7237TIPO33_FORMATO.pdf"; 
$FACTRONICA["FILEPDFCLIENTE"]="FOLIO7237TIPO33_FORMATO.pdf";  
$FACTRONICA["FOLDERFILES"]="../home/769141901";
$FACTRONICA["FILETXT"]="ARCHIVOPLANO_EMISOR766067166_TIPO33_FOLIO7237.txt";  
$FACTRONICA["DTEPORFIRMAR"]="FOLIO7237TIPO33_DTEPORFIRMAR.xml";  
$FACTRONICA["DTEFIRMADO"]="FOLIO7237TIPO33_DTEFIRMADO.xml";  
$FACTRONICA["SETDTEPORFIRMAR"]="FOLIO7237TIPO33_SETDTEPORFIRMAR.xml";  
$FACTRONICA["SETDTEFIRMADO_CLIENTE"]="FOLIO7237TIPO33_SETDTE_FIRMADO.xml";  
$FACTRONICA["SETDTEFIRMADO_SII"]="FOLIO7237TIPO33_SETDTE_FIRMADO_SII.xml";  
$FACTRONICA["FILEPNG"]="FOLIO7237TIPO33.png";  
$FACTRONICA["TRACKID"]="TRACKID_766067166_TIPO33_FOLIO7237.xml";  
$FACTRONICA["PDFDECIMALESCANTIDAD"]="0";  
$FACTRONICA["PDFDECIMALESUNITARIO"]="0"; 
$FACTRONICA["URLHOST"]="http://192.168.0.203/servidor_factronica"; 
$FACTRONICA["URLFILE"]="index.php";


#################################################################
# CASILLA DE CORREO PARA AUTENTICACION Y ENVIO DE MAIL VIA SMTP #
# MAS ABAJO SE OBTIENEN LAS MISMAS VARIABLES DESDE EL TXT
# EN EL CASO DE VENIR SE SOBREESCRIBEN Y ESAS PASAN A SER LAS FINALES
#################################################################
# PARA GMAIL.COM
$FACTRONICA["SMTP_HOST"]="smtp.gmail.com";
$FACTRONICA["SMTP_PORT"]="587";  
$FACTRONICA["SECURE"]="tls";  
$FACTRONICA["SMTP_USER"]="facturas.clientes.pruebas@gmail.com";   
$FACTRONICA["SMTP_PASS"]="nnn";  



#################################################################
# CONFIGURACION ACCESO A LA BASE DE DATOS DE MAILS INTERCAMBIO  #
# MAS ABAJO SE OBTIENEN LAS MISMAS VARIABLES DESDE EL TXT
# EN EL CASO DE VENIR SE SOBREESCRIBEN Y ESAS PASAN A SER LAS FINALES
#################################################################  
$FACTRONICA["MYSQL_HOST"]="190.100.100.113";
$FACTRONICA["MYSQL_USER"]="dddd";  
$FACTRONICA["MYSQL_PASS"]="nnnn";  
$FACTRONICA["MYSQL_DB"]="ffff"; 


#################################################################
# CASILLA DE RESPALDO DE DOCUMENTOS ELECTRONICOS PARA CLIENTE   #
#################################################################
$FACTRONICA["RESPALDOMAIL"]="facturas.respaldos@gmail.com";
$FACTRONICA["RESPALDONAME"]="ENVIO DOCUMENTO ELECTRONICO";

?>
