<?php 
############################################################## 
#######	DATOS DE CARATULA
##############################################################
$caratula["RutEmisor"]="11111111-1"; # RUT DEL CONTRIBUYENTE EMISOR
$caratula["RutEnvia"]="22222222-2"; # RUT REPRESENTANTE LEGAL DEL EMISOR
$caratula["RutReceptor"]="60803000-K"; # RUT DEL SII 60803000-K (DATO CONSTANTE)
$caratula["FchResol"]="2014-08-22"; # FECHA DE RESOLUCIÓN ASIGNADO POR EL SII
$caratula["NroResol"]="80";  # NÚMERO DE CERTIFICACION ASIGNADO POR EL SII
$caratula["SucSii"]="SANTIAGO ORIENTE"; # NOMBRE SUCURSAL SII

##############################################################   
#######	DATOS DEL ENCABEZADO
############################################################## 
$IdDoc["FchEmis"]="2017-08-09";  # FECHA DE EMISIÓN AAAA-MM-DD
$IdDoc["FchVenc"]="2017-08-09"; 	# FECHA DE VENCIMIENTO AAAA-MM-DD
$IdDoc["TermPagoGlosa"]="CONTADO EFECTIVO"; # TEXTO FORMA DE PAGO
$IdDoc["TipoDTE"]="56"; # TIPO DE DOCUMENTO FV=33, ND=56, NC=61, GUIA=52   ********* PARA NOTA DE DEBITO *********
$IdDoc["Folio"]="5"; # FOLIO DEL DOCUMENTO
$IdDoc["TipoDespacho"]="";  # TIPO DE GUIA DESPACHO (SOLO APLICA A GUIA DESPACHO)
$IdDoc["IndTraslado"]="";  # TIPO DE TRASLADO DE GUIA DESPACHO (SOLO APLICA A GUIA DESPACHO)
$IdDoc["MntBruto"]="0"; # 0=VALORESNETOS 1=VALORESBRUTOS
$IdDoc["Observaciones"]="SE ANULA NOTA DE CREDITO";# OBSERVACIONES DEL DOCUMENTO

############################################################## 
#######	DATOS DEL EMISOR DEL DOCUMENTO
##############################################################
$Emisor["RUTEmisor"]="11111111-1";  # RUT EMISOR
$Emisor["RznSoc"]="PEREZ PRUEBAS SPA"; # RAZON SOCIAL EMISOR
$Emisor["GiroEmis"]="VENTA ARTICULOS ELECTRONICOS Y COMPUTACION";# GIRO EMISOR
$Emisor["Acteco"]="523930"; # CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL
$Emisor["CdgSIISucur"]="15108"; # CODIGO DE LA SUCURSAL DEL SII
$Emisor["DirOrigen"]="ALAMEDA 540";# DIRECCION EMISOR
$Emisor["CmnaOrigen"]="LAS CONDES";# COMUNA EMISOR
$Emisor["CiudadOrigen"]="SANTIAGO"; # CIUDAD EMISOR
$Emisor["CdgVendedor"]="PEDRO PEREZ PRUEBAS"; # CODIGO DEl VENDEDOR
$Emisor["CorreoEmisor"]="PEDROPEREZPRUEBAS@GMAIL.COM"; # EMAIL EMISOR
$Emisor["Web"]="WWW.PEREZPRUEBAS.CL"; # WEB EMISOR
$Emisor["Telefono"]="22 555 44 44"; # FONO EMISOR
$Emisor["Fax"]="22 444 55 66"; # FAX EMISOR

############################################################## 
#######	DATOS DEL RECEPTOR
##############################################################
$Receptor["RUTRecep"]="33333333-3"; # RUT RECEPTOR
$Receptor["CdgIntRecep"]="123"; # CODIGO DEL RECEPTOR
$Receptor["RznSocRecep"]="LIBRERIA PAPELUCHO SPA"; # RAZON SOCIAL RECEPTOR
$Receptor["GiroRecep"]="VENTA ARTICULOS BAZAR"; # GIRO RECEPTOR
$Receptor["DirRecep"]="LOS TRAPENSES 123"; # DIRECCION RECEPTOR
$Receptor["CmnaRecep"]="VITACURA"; # COMUNA RECEPTOR
$Receptor["CiudadRecep"]="SANTIAGO"; # CIUDAD RECEPTOR
$Receptor["Contacto"]="LUIS MAS PRUEBAS";# CONTACTO RECEPTOR
$Receptor["CorreoRecep"]="LIBRERIAPAPELUCHO@GMAIL.COM"; # CORREO RECEPTOR

##############################################################
#######	DATOS DE TOTALES	
##############################################################
$Totales["TasaIVA"]="19";# TASA DE IMPUESTO
$Totales["MntNeto"]="1540000"; # NETO AFECTO
$Totales["MntExe"]="0"; # NETO EXENTO
$Totales["IVA"]="292600"; # MONTO IVA
$Totales["MntTotal"]="1832600";  # MONTO TOTAL BRUTO
$Totales["porcdescuento_afecto"]=""; # % DESCUENTO GLOBAL AFECTO
$Totales["porcdescuento_exento"]="";# % DESCUENTO GLOBAL EXENTO

##############################################################
#######	 DETALLE
##############################################################
# LINEA 1 DEL DETALLE DEL DOCUMENTO
$detalle["1"]["NroLinDet"]="1"; # NUMERO DE LINEA
$detalle["1"]["NmbItem"]="COMPUTADOR DE ESCRITORIO"; # NOMBRE DEL ITEM
$detalle["1"]["DscItem"]="INTEL ICORE 5 2.7GHZ - 16GB RAM - 2TB HDD"; # DESCRIPCION EXTENDIDA DEL ITEM
$detalle["1"]["TpoCodigo"]="INT1"; # TIPO DE CODIGO 
$detalle["1"]["VlrCodigo"]="10001"; # CODIGO DEL ITEM
$detalle["1"]["UnmdItem"]="UND"; # UNIDAD DE MEDIDA
$detalle["1"]["QtyItem"]="4"; # CANTIDAD 
$detalle["1"]["PrcItem"]="250000"; # PRECIO UNITARIO DEL ITEM
$detalle["1"]["MontoItem"]="1000000"; # SUBTOTAL DEL ITEM
$detalle["1"]["DescuentoPct"]="10"; # DESCUENTO EN PORCENTAJE DEL ITEM
$detalle["1"]["DscItemPesos"]="100000"; # DESCUENTO EN PESOS DEL ITEM 
$detalle["1"]["IndExe"]="0"; # INDICADOR DE ITEM EXENTOS 1=SI 0=NO
#
# LINEA 2 DEL DETALLE DEL DOCUMENTO
$detalle["2"]["NroLinDet"]="2"; # NUMERO DE LINEA
$detalle["2"]["NmbItem"]="MONITOR SAMSUNG"; # NOMBRE DEL ITEM
$detalle["2"]["DscItem"]="PANTALLA CURVA HD RESOLUTION HDMI"; # DESCRIPCION EXTENDIDA DEL ITEM
$detalle["2"]["TpoCodigo"]="INT1"; # TIPO DE CODIGO 
$detalle["2"]["VlrCodigo"]="22321"; # CODIGO DEL ITEM
$detalle["2"]["UnmdItem"]="UND"; # UNIDAD DE MEDIDA
$detalle["2"]["QtyItem"]="4"; # CANTIDAD 
$detalle["2"]["PrcItem"]="125000"; # PRECIO UNITARIO DEL ITEM
$detalle["2"]["MontoItem"]="500000"; # SUBTOTAL DEL ITEM
$detalle["2"]["DescuentoPct"]="0"; # DESCUENTO EN PORCENTAJE DEL ITEM
$detalle["2"]["DscItemPesos"]="0"; # DESCUENTO EN PESOS DEL ITEM 
$detalle["2"]["IndExe"]="0"; # INDICADOR DE ITEM EXENTOS 1=SI 0=NO
#
# LINEA 3 DEL DETALLE DEL DOCUMENTO
$detalle["3"]["NroLinDet"]="3"; # NUMERO DE LINEA
$detalle["3"]["NmbItem"]="KIT ACCESORIOS PC"; # NOMBRE DEL ITEM
$detalle["3"]["DscItem"]="TECLADO Y MOUSE INALAMBRICO MAS PARLANTES 100 WATTS"; # DESCRIPCION EXTENDIDA DEL ITEM
$detalle["3"]["TpoCodigo"]="INT1"; # TIPO DE CODIGO 
$detalle["3"]["VlrCodigo"]="43213"; # CODIGO DEL ITEM
$detalle["3"]["UnmdItem"]="UND"; # UNIDAD DE MEDIDA
$detalle["3"]["QtyItem"]="4"; # CANTIDAD 
$detalle["3"]["PrcItem"]="35000"; # PRECIO UNITARIO DEL ITEM
$detalle["3"]["MontoItem"]="140000"; # SUBTOTAL DEL ITEM
$detalle["3"]["DescuentoPct"]="0"; # DESCUENTO EN PORCENTAJE DEL ITEM
$detalle["3"]["DscItemPesos"]="0"; # DESCUENTO EN PESOS DEL ITEM 
$detalle["3"]["IndExe"]="0"; # INDICADOR DE ITEM EXENTOS 1=SI 0=NO

###################################################################################
#######	DATOS DE REFERENCIA A LA FACTURA QUE SE ESTA ANULANDO CON NOTA DE CREDITO
###################################################################################
$doc_referencia["1"]["TpoDocRef"]="61"; # CODIGO DEL DOCUMENTO QUE ANULA       ********* PARA NOTA DE DEBITO *********
$doc_referencia["1"]["FolioRef"]="12"; # FOLIO DEL DOCUMENTO QUE ANULA       ********* PARA NOTA DE DEBITO *********
$doc_referencia["1"]["FchRef"]="2017-08-09"; # FECHA DEL DOCUMENTO QUE ANULA   ********* PARA NOTA DE DEBITO *********
$doc_referencia["1"]["CodRef"]="1"; # CODIGO DE REFERENCIA 1=ANULA             ********* PARA NOTA DE DEBITO *********
$doc_referencia["1"]["RazonRef"]="SE ANULA NOTA CREDITO 12"; # COMENTARIOS        ********* PARA NOTA DE DEBITO *********

############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
$FACTRONICA["Modulus"]="NNNNN"; # MODULO DEL CERTIFICADO
$FACTRONICA["Exponent"]="NNNNNN"; # EXPONENTE DEL CERTIFICADO
$FACTRONICA["X509Certificate"]="NNNNNNNNN";# X509 DEL CERTIFICADO
$FACTRONICA["PrivKey"]="NNNNNNNN";  # LLAVE PRIVADA DEL CERTIFICADO

##############################################################
#######	DATOS DE TIMBRAJE DE FOLIOS
##############################################################
#
$CAF["RE"]="11111111-1";# RUT EMISOR
$CAF["RS"]="PEREZ PRUEBAS SPA"; # RAZON SOCIAL EMISOR
$CAF["TD"]="56"; # TIPO DE DOCUMENTO
$CAF["RNG_D"]="1"; # FOLIO DESDE
$CAF["RNG_H"]="100";# FOLIO HASTA
$CAF["FA"]="2017-06-22";# FECHA AUTORIZACION TIMBRAJE
$CAF["RSAPK_M"]="NNNNNNN"; # MODULO LLAVE PRIVADA TIMBRAJE
$CAF["RSAPK_E"]="Aw=="; # MODULO EXPONENTE TIMBRAJE
$CAF["RSAPK_IDK"]="300"; # INDICE DEL TIMBRAJE
$CAF["FRMA"]="NNNNNNN"; # FIRMA DEL TIMBRAJE
$CAF["RSASK"]="NNNNNN"; # LLAVE PRIVADA DEL TIMBRAJE
$CAF["RSAPUBK"]="NNNNNNNNN"; # LLAVE PUBLICA DEL TIMBRAJE

############################################################## 
#######	PARAMETROS DE CONFIGURACIÓN
##############################################################
$sw_produccion="1"; # 1=PRODUCCION 0=PRUEBAS
$sw_enviar_intercambio="1"; # ENVIAR MAIL INTERCAMBIO 1=SI 0=NO
$sw_enviar_sii="1"; # ENVIAR XML AL SII 0=NO 1=SI
$sw_enviar_emisor="1"; # ENVIAR MAIL CON XML AL EMISOR 1=SI 0=NO
$sw_enviar_receptor="1"; # ENVIAR MAIL CON XML AL RECEPTOR 1=SI 0=NO
$url_logo="";# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png 
$url_logo_central="";# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png

############################################################## 
#######	PARAMETROS DE WEBSERVICE DE FACTURACION
##############################################################
$FACTRONICA["FOLDERFILES"]="../home/111111111"; # CARPETA PARA ALMACENAR DOCUMENTOS
$FACTRONICA["FILEPDF"]="FOLIO5TIPO56_FORMATO.pdf";  # NOMBRE DEL ARCHIVO PDF
$FACTRONICA["FILETXT"]="ARCHIVOPLANO_EMISOR111111111_TIPO56_FOLIO5.txt";  # NOMBRE DEL ARCHIVO TXT
$FACTRONICA["DTEPORFIRMAR"]="FOLIO5TIPO56_DTEPORFIRMAR.xml"; # NOMBRE DEL XML DTE SIN FIRMAR  
$FACTRONICA["DTEFIRMADO"]="FOLIO5TIPO56_DTEFIRMADO.xml";  # NOMBRE DEL ARCHIVO XML DTE FIRMADO
$FACTRONICA["SETDTEPORFIRMAR"]="FOLIO5TIPO56_SETDTEPORFIRMAR.xml";  # NOMBRE DEL ARCHIVO XML SOBRE SIN FIRMAR
$FACTRONICA["SETDTEFIRMADO_CLIENTE"]="FOLIO5TIPO56_SETDTE_FIRMADO.xml";  # NOMBRE DEL ARCHIVO XML SOBRE FIRMADO PARA CLIENTE
$FACTRONICA["SETDTEFIRMADO_SII"]="FOLIO5TIPO56_SETDTE_FIRMADO_SII.xml";  # NOMBRE DEL ARCHIVO XML SOBRE FIRMADO PARA SII
$FACTRONICA["FILEPNG"]="FOLIO5TIPO33.png";  # NOMBRE DEL ARCHIVO PNG CON CODIGO DE BARRAS PDF417
$FACTRONICA["TRACKID"]="TRACKID_111111111_TIPO56_FOLIO5.xml";  # NOMBRE DEL ARCHIVO XML CON EL TRACKID
$FACTRONICA["URLHOST"]="http://192.168.0.203/servidor_factronica"; # URL DEL WEBSERVICE DE FACTURACION
$FACTRONICA["URLFILE"]="index.php"; # NOMBRE DEL ARCHIVO RECEPTOR DE TXT ( CONTANTE NO CAMBIAR )

#################################################################
# DATOS DE CUENTA CORREO ELECTRONICO (ENVIADOR)
#################################################################
$FACTRONICA["SMTP_HOST"]="smtp.gmail.com"; # SERVIDOR SMTP
$FACTRONICA["SMTP_PORT"]="587"; # PUERTO DE COMUNICACION DE MAIL
$FACTRONICA["SECURE"]="tls"; # TIPO DE SEGURIDAD
$FACTRONICA["SMTP_USER"]="facturas.clientes.pruebas@gmail.com"; # CUENTA DE CORREO
$FACTRONICA["SMTP_PASS"]="nnn"; # CLAVE DE LA CUENTA DE CORREO

#################################################################
# CONFIGURACION ACCESO A LA BASE DE DATOS DE MAILS INTERCAMBIO  #
#################################################################  
$FACTRONICA["MYSQL_HOST"]="192.168.100.10"; # IP SERVIDOR BASE DATOS
$FACTRONICA["MYSQL_USER"]="dddd";  # USUARIO DE BASE DATOS
$FACTRONICA["MYSQL_PASS"]="nnnn";  # CLAVE DEL USUARIO BASE DATOS
$FACTRONICA["MYSQL_DB"]="ffff";  # NOMBRE DE LA BASE DE DATOS

#################################################################
# CASILLA DE RESPALDO DE DOCUMENTOS ELECTRONICOS PARA CLIENTE   #
#################################################################
$FACTRONICA["RESPALDOMAIL"]="facturas.respaldos@gmail.com";# MAL DE RESPALDO
$FACTRONICA["RESPALDONAME"]="ENVIO DOCUMENTO ELECTRONICO";# NOMBRE DE LA CUENTA DE MAIL RESPAKDO
?>