<?php
#
#############################################################################
#
# PLANTILLA DE EJEMPLO CON DATOS A ENVIAR PARA EMITIR FACTURA ELECTRÓNICA
#
#############################################################################


#
# ARRAY CON DATOS PARA EMITIR FACTURA ELECTRÓNICA TIPO 33
$DatosDTE = array(

#########################################
# DATOS DE CARATULA 
#########################################
"RutEmisor" =>"11111111-1",
"RutEnvia" =>"26009913-2",
"RutReceptor" =>"60803000-K", 
"FchResol" =>"2014-08-22",
"NroResol" =>"80",
"SucSii" =>"PROVIDENCIA",

#########################################
# DATOS DEL ENCABEZADO 
#########################################
"FchEmis" =>"2021-07-27",
"FchVenc" =>"2021-07-27",
"TermPagoGlosa" =>"CONTADO",
"MedioPago" =>"EF",
"TipoDTE" =>"33",
"Folio" =>"123456",
"MntBruto"=>"0",
"Observaciones" =>"Factura de Prueba",

#########################################
# DATOS DEL EMISOR (PROVEEDOR)
#########################################
"RUTEmisor" =>"11111111-1",
"RznSoc" =>"MEGAMERCADO PRUEBAS SPA",
"GiroEmis" =>"COMERCIO Y DISTRIBUIDORA DE ALIMENTOS",
"Acteco" =>"107100",
"CdgSIISucur" =>"12312",
"DirOrigen" =>"AVENIDA LAS PRUEBAS 3344",
"CmnaOrigen" =>"PROVIDENCIA",
"CiudadOrigen" =>"SANTIAGO",
"CdgVendedor"=>"JUAN PEREZ",
"CorreoEmisor" =>"EMISOR@PRUEBAS.CL",
"Web" =>"WWW.MEGAMERCADO-PRUEBAS.CL",
"Telefono" =>"56912345678"


#########################################
# DATOS DEL RECEPTOR (CLIENTE)
#########################################
"RUTRecep"=>"22222222-2",
"CdgIntRecep"=>"12312",
"RznSocRecep"=>"PASTELERIA DULCINEA SPA",
"GiroRecep"=>"PANADERIA Y PASTELERIA",
"DirRecep"=>"CALLE LOS PASTELES 752",
"CmnaRecep"=>"VITACURA",
"CiudadRecep"=>"SANTIAGO",
"Contacto"=>"PEDRO PRUEBAS",
"CorreoRecep"=>"contacto@pruebas.cl",
"FonoRecep"=>"56987654321",

#########################################
# TOTALES DEL DOCUMENTO
#########################################
"TasaIVA" => "19",
"MntNeto" => "9350",
"MntExe" => "0",
"IVA" => "1777",
"MntTotal" => "11127",
#
#
#########################################
# DETALLE DE ITEMS
#########################################
#
# CODIGO DEL ITEM
"VlrCodigo"=>array("10001","20021","10002"),
#
# NOMBRE DEL ITEM
"NmbItem"=>array("GALLETAS","PAN","HUEVOS"),
#
# DESCRIPCION EXTENDIDA DEL ITEM
"DscItem"=>array("","",""),
#
# CANTIDAD
"QtyItem"=>array(2,2.5,12),
#
# DECIMALES PARA LA CANTIDAD
"DecQtyItem"=>array(0,1,0),
#
# UNIDAD DE MEDIDA
"UnmdItem"=>array("UN","KG","UN"),
#
# PRECIO UNITARIO
"PrcItem"=>array(1000,2500,300),
#
# DECIMALES PARA EL PRECIO UNITARIO
"DecPrcItem"=>array(0,0,0),
#
# INDICADOR DE ITEM EXENTO 1=SI 0=NO
"IndExe"=>array(0,0,0),
#
# PORCENTAJE DE DESCUENTO DEL ITEM
"DescuentoPct"=>array(0,0,0),
#
# DESCUENTO EN PESOS DEL ITEM
"DscItemPesos"=>array(0,0,0),
#
# SUBTOTAL DEL ITEM
"MontoItem"=>array(2000,3750,3600),


#########################################
# REFERENCIAS
#########################################
#
# NUMERO DE REFERENCIA 1,2,3,ETC...
"NroLinRef"=>array(),				
#
# TIPO DE DTE AL CUAL REFERENCIA
"TpoDocRef"=>array(),				
#
# SE APLICA PARA FACTURACION MASIVA DE GUIA
"IndGlobal"=>array(),
#
# FOLIO DEL DTE QUE SE REFERENCIA
"FolioRef"=>array(),
#
# FECHA DEL DTE QUE SE REFERENCIA
"FchRef"=>array(),
#
# MOTIVO 1=ANULA  2=CORRIGE_TEXTO   3=CORRIGE_VALORES
"CodRef"=>array(),  				
#
# COMENTARIO INDICANDO MOTIVO DE LA REFERENCIA
"RazonRef"=>array(), 	


#########################################
# DATOS SERVIDOR DE CORREO
#########################################
"SMTP_HOST"=>"mail.suservidor.cl",  
"SMTP_PORT"=>"465",
"SMTP_SECURE"=>"ssl",
"SMTP_USER"=>"dte@suservidor.cl",
"SMTP_PASS"=>"12345",
	 

#########################################
# ENVIAR COPIAS DE CORREO
#########################################
"CORREO_CC1"=>"COPIA1@gmail.com",
"CORREO_CC2"=>"COPIA2@factronica.cl",
"CORREO_BCC1"=>"COPIAOCULTA1@gmail.com",
"CORREO_BCC2"=>"COPIAOCULTA2@gmail.com",
"CORREO_RESPUESTA"=>"RESPUESTA_PARA@PRUEBAS.cl",


#########################################
# DATOS DEL PROVEEDOR
#########################################
"PROVEEDOR_NOMBRE"=>"FACTRONICA SPA",
"PROVEEDOR_MAIL"=>"soporte@factronica.cl",
"PROVEEDOR_WEB"=>"www.factronica.cl",
"PROVEEDOR_FONO"=>"5693334455",


#########################################
# CERTIFICADO DIGITAL
#########################################
"Modulus"=>"1cqhYtIoH1Ecd+kglJtDIguP5vRhC09y0zQMx9dUVprWLPHCA95x+kjmzYL9hxBj
OufrLCML3hVZ6f0HSwOHfM7LjPZnZFEubxNSbe//Rj82dgBdPsXbvPa0vENOuOxP
EO+7hfE3rRFbJwlJVhDa22hFbKhW1PFejp+IHAi5s5E=",

"Exponent"=>"AQAB",

"X509Certificate"=>"MIIGQzCCBSugAwIBAgIKTy8J4QAAABJFBjANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
Ns+zrUW1g5yYKkB2rxo3i+y8Mk/ZIhuIU079XPoBtemvdXXTHStfHKMmaPH4OiI1
YAwT7W/88r/tINY/i4vXfOg1Xh+CKWl/rX+kywcIWo9ruiGpdIojJL5B2OqoC8+f
4MxpgF7YC0YyPjaaze6jbNfGVbrJS8MD1uzAvIo6E2Vo1J4jdYJeUnOw4fQBFnoD
SQThgpn5uoVgia2NUpqAQRJ4BArT0Bc=",

"PrivKey"=>"-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDVyqFi0igfURx36SCUm0MiC4/m9GELT3LTNAzH11RWmtYs8cID
wCg9V1Xba89Lrn4hexUCQDSM76rTE+w4JqDFNKBgEvmUhbR7UwgS5CuzQhm75MGk
4vnsMueBXzOjZjYgRxa8i4ijDOeF9jFmqZpVxD6G3OQ=
-----END RSA PRIVATE KEY-----
",

#########################################
# CAF TIMBRAJE DE FOLIOS
#########################################
"RE"=>"11111111-1",

"RS"=>"MEGAMERCADO PRUEBAS SPA",

"TD"=>"33",

"RNG_D"=>"1",

"RNG_H"=>"50000",

"FA"=>"2018-07-20",

"RSAPK_M"=>"rJ0g1ZpsEGej6HunZq21O2dKWVYh4u4B/pXscO5Kk/AANMKHpgbnaU9mDTQ7+O8xhd1TRuNAIXcqlqyXbSp6Hw==",

"RSAPK_E"=>"Aw==",

"RSAPK_IDK"=>"300",

"FRMA"=>"a9JPkmgZjgsAMgeJ+VyxDc9CYTb74pWxOwMPxW8BXqess22owf/OGfmswT0f3XtAJewJScPqGTlKUOnVRUCYeg==",

"RSASK"=>"-----BEGIN RSA PRIVATE KEY-----
MIIBOQIBAAJBAKydINWabBBno+h7p2attTtnSllWIeLuAf6V7HDuSpPwADTCh6YG
52lPZg00O/jvMYXdU0bjQCF3Kpasl20qeh8CAQMCQHMTazkRnWBFF/BSb5nJI3zv
huY5a+yeq/8OnaCe3GKe58oWxS5SBQw21QBP+KYPzOUDfoldajl4YrhNMIBjF4sC
IQDWy3cZGCQFnDoxWVW6n4zubDWGeYavjHYPrDpvZYoi+QIhAM26KUbIZ9o6wvUz
ZoxgSo/CIo7/UHE+zIbV/l9HC7PXAiEAjzJPZhAYA718IOY5JxUInvLOWaZZyl2k
CnLRn5kGwfsCIQCJJsYvMEU8Jyyjd5my6txf1sG0qjWg1IhZ4/7qL10ijwIgd5lz
6UERLy4itp+6f0uT3RykZvhX64e9Ztq/Hrccp/E=
-----END RSA PRIVATE KEY-----",

"RSAPUBK"=>"-----BEGIN PUBLIC KEY-----
MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBAKydINWabBBno+h7p2attTtnSllWIeLu
Af6V7HDuSpPwADTCh6YG52lPZg00O/jvMYXdU0bjQCF3Kpasl20qeh8CAQM=
-----END PUBLIC KEY-----",


# TOKEN DE ACCESO A LA API
"TOKEN" => "API-KEY-TOKEN"

);
 

 

 
?>
