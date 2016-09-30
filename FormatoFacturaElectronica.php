<?php
##############################################################
####### DATOS DEL SERVIDOR
##############################################################
# URL DEL WEBSERVICE SERVIDOR EJ. http://www.factronica.cl/factronica_webservice_servidor_beta
$CONFACTRONICA["URLHOST"]="http://190.107.177.194/~ws777777777/servidor001";
# SCRIPT DEL SERVIDOR EJ. index.php
$CONFACTRONICA["URLFILE"]="index.php";
# PUERTO DE COMUNICACION ej.80
$CONFACTRONICA["PORT"]="80";
# DEPURAR ej. 1
$CONFACTRONICA["VERBOSE"]=1;
# RETORNAR RESULTADOS ej. 1
$CONFACTRONICA["RETURNTRANSFER"]=1;
# TIEMPO MAXIMO ESPERA ej.30
$CONFACTRONICA["TIMEOUT"]=30;
# ENCABEZADO DEL ENVIO ej. 0
$CONFACTRONICA["HEADER"]=0; 
# ENVIAR ENCABEZADO EJ. true
$CONFACTRONICA["HEADER_OUT"]=true;
##############################################################                                                 
#######   PARAMETROS DE CONFIGURACIÓN                                                                          
##############################################################                                                 
#                                                                                                              
# AMBIENTE A UTILIZAR DEL SII 1=PRODUCCION 0=PRUEBA (CERTIFICACION)                                            
$sw_produccion="0";                                                                                            
#                                                                                                              
# ENVIAR MAIL CON XML Y PDF AL CORREO DE INTERCAMBIO REGISTRADO EN EL SII 1=SI 0=NO                            
$sw_enviar_intercambio="0";                                                                                    
#                                                                                                              
# ENVIAR XML AL SII 0=NO 1=SI                                                                                  
$sw_enviar_sii="0";                                                                                            
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
# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png  120X120 PIXELS                      
$url_logo="";// utilizar url normal sin https ni url corta          https://goo.gl/t2ljAK";                                                              
#                                                                                                              
# URL DEL LOGO CENTRAL A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png  240X240 PIXELS              
$url_logo_central="";                                                                                          
#                                                                                                              
# INDICA LA CANTIDAD DE DECIMALES A MOSTRAR EN LA COLUMNA CANTIDAD DEL PDF
$CONFACTRONICA["PDFDECIMALESCANTIDAD"]="0";
#
# INDICA LA CANTIDAD DE DECIMALES A MOSTRAR EN LA COLUMNA UNITARIO DEL PDF
$CONFACTRONICA["PDFDECIMALESUNITARIO"]="";                                                                                 
#                                                                                                              
# NOMBRE DEL PROVEEDOR DE FACTURA ELECTRONICA QUE APARECE AL PIE DEL PDF                                       
$nom_proveedor="FACTRONICA";                                                                                   
#                                                                                                              
# RUL DEL PROVEEDOR DE FACTURA ELECTRONICA QUE APARECE AL PIE DEL PDF                                          
$url_proveedor="";                                                                            

##############################################################                                                 
####### NOMBRES DIRECTORIOS DE ALMACENAMIENTO LOCAL Y REMOTO                                                   
##############################################################                                                 
# NOMBRE DE LA CARPETA LOCAL DE ALMACENAMIENTO                                                                 
$CONFACTRONICA["FOLDERPDF"]="almacen_local";                                                                   
# NOMBRE DE LA CARPETA REMOTA DE ALMACENAMIENTO                                                                
$CONFACTRONICA["FOLDERFILES"]="almacen_remoto";                                                                
                                                                                                               
                                                                                                               
##############################################################                                                 
#######                                                                                                        
##############################################################                                                 
# NOMBRE DEL ARCHIVO PLANO QUE ESTA ENVIANDO                                                                   
$CONFACTRONICA["FILETXT"]="envio_dte.txt";                                                                     
                                                                                                               
                                                                                                               
##############################################################                                                 
#######                                                                                                        
##############################################################                                                 
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF                                                                   
$CONFACTRONICA["FILEPDF"]="PDF_RUT89428000-K_TIPO33_FOLIO38.pdf";
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF                                                                   
$CONFACTRONICA["FILEPDFCLIENTE"]="PDFC_RUT89428000-K_TIPO33_FOLIO38.pdf";
# NOMBRE DEL ARCHIVO PNG CON LA IMAGEN DEL PDF417 (TED) TIMBRE ELECTRONICO SII CHILE                           
$CONFACTRONICA["FILEPNG"]="PDF4189428000-K_TIPO33_FOLIO38.png";
# NOMBRE DEL ARCHIVO XML CON LA RESPUESTA DEL SII (TRACKID)                                                    
$CONFACTRONICA["TRACKID"]="TRACKID_RUT89428000-K_TIPO33_FOLIO38.xml";
                                                                                                               
                                                                                                               
                                                                                                               
##############################################################                                                 
####### NOMBRE DE ARCHIVOS XML POR FIRMAR                                                                      
##############################################################                                                 
# NOMBRE DEL ARCHIVO DEL DTE POR FIRMAR                                                                        
$CONFACTRONICA["DTEPORFIRMAR"]="DTEPORFIRMAR_RUT89428000-K_TIPO33_FOLIO38.xml";
# NOMBRE DEL ARCHIVO DEL SET POR FIRMAR                                                                        
$CONFACTRONICA["SETDTEPORFIRMAR"]="SETPORFIRMAR_RUT89428000-K_TIPO33_FOLIO38.xml";
                                                                                                               
                                                                                                               
##############################################################                                                 
####### NOMBRE DE ARCHIVOS XML FIRMADOS                                                                        
##############################################################                                                 
# NOMBRE DEL ARCHIVO DEL DTE FIRMADO                                                                           
$CONFACTRONICA["DTEFIRMADO"]="DTEFIRMADO_RUT89428000-K_TIPO33_FOLIO38.xml";
# NOMBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIARÁ AL CLIENTE AL MAIL INTERCAMBIO                           
$CONFACTRONICA["SETDTEFIRMADO_CLIENTE"]="SETFIRMADOCLIENTE_RUT89428000-K_TIPO33_FOLIO38.xml";
# NOMBBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIARA AL SII POR MEDIO DE WEBSERVICES                         
$CONFACTRONICA["SETDTEFIRMADO_SII"]="SETFIRMADOSII_RUT89428000-K_TIPO33_FOLIO38.xml";
                                                                                                               
                                                                                                               
                                                                                                               
##############################################################                                                 
#######   CARATULA                                                                                             
##############################################################                                                 
#                                                                                                              
# RUT DEL CONTRIBUYENTE EMISOR                                                                                 
$caratula["RutEmisor"]="7777777-7";
#                                                                                                              
# RUT AUTORIZADO A ENVIAR DTES AL SII SIEMPRE ES RUT DE PERSONA NO DE EMPRESA                                  
$caratula["RutEnvia"]="33333333-3";
#                                                                                                              
# RUT DEL SII 60803000-K (SIEMPRE VA AQUI EL RUT DEL SII)                                                      
$caratula["RutReceptor"]="60803000-K";                                                                         
#                                                                                                              
# FECHA DE RESOLUCIÓN DE INICIO EN FACTURA ELECTRONICA                                                         
$caratula["FchResol"]="2014-08-22";
#                                                                                                              
# CERTIFICACION NUM=CERO                                                                                       
$caratula["NroResol"]="80";
#                                                                                                              
# NOMBRE SUCURSAL SII                                                                                          
$caratula["SucSii"]="PUNTA ARENAS";
#                                                                                                              
##############################################################                                                 
#######   ENCABEZADO                                                                                           
##############################################################                                                 
#                                                                                                              
# FECHA DE EMISIÓN                                                                                             
$IdDoc["FchEmis"]="2016-08-05";
#                                                                                                              
# FECHA DE VENCIMIENTO AAAA-MM-DD                                                                              
$IdDoc["FchVenc"]="2016-08-05";
#                                                                                                              
# TEXTO CON FORMA DE PAGO                                                                                      
$IdDoc["TermPagoGlosa"]="CONTADO";
#                                                                                                              
# TIPO DE DOCUMENTO FV=33, ND=56, NC=61                                                                        
$IdDoc["TipoDTE"]="33";
#                                                                                                              
# FOLIO DEL DOCUMENTO                                                                                          
$IdDoc["Folio"]="245";
#                                                                                                              
# INDICADOR DE LINEAS EN VALORES BRUTOS 1=SI 0=NO                                                              
$IdDoc["MntBruto"]="0";
                                                                                                               
##############################################################                                                 
#######   EMISOR                                                                                               
##############################################################                                                 
#                                                                                                              
# RUT EMISOR                                                                                                   
$Emisor["RUTEmisor"]="77777777-7";
#                                                                                                              
# RAZON SOCIAL EMISOR                                                                                          
$Emisor["RznSoc"]="EMPRESA LTDA";
#                                                                                                              
# GIRO EMISOR                                                                                                  
$Emisor["GiroEmis"]="MARKETING";
#                                                                                                              
# CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL                                                                      
$Emisor["Acteco"]="202900";
#                                                                                                              
# CODIGO DE LA SUCURSAL DEL SII                                                                                
$Emisor["CdgSIISucur"]="12205";
#                                                                                                              
# DIRECCION EMISOR                                                                                             
$Emisor["DirOrigen"]="ALAMEDA 340";
#                                                                                                              
# COMUNA EMISOR                                                                                                
$Emisor["CmnaOrigen"]="PUNTA ARENAS";
#                                                                                                              
# CIUDAD EMISOR                                                                                                
$Emisor["CiudadOrigen"]="PUNTA ARENAS";
#                                                                                                              
# Código del Vendedor - Glosa con identificador del vendedor
# Adminite un máximo de 60 carácteres alfanumericos
$Emisor["CdgVendedor"]="PERICO LOS PALOTES";
#                                                                                                              
# EMAIL EMISOR                                                                                                 
$Emisor["CorreoEmisor"]="ventas1@MARKETING.cl";
#                                                                                                              
# WEB EMISOR                                                                                                   
$Emisor["Web"]="www.MARKETIING.cl";
#                                                                                                              
# FONO EMISOR                                                                                                  
$Emisor["Telefono"]="22334455";
#                                                                                                              
##############################################################                                                 
#######   RECEPTOR                                                                                             
##############################################################                                                 
#                                                                                                              
# RUT RECEPTOR                                                                                                 
$Receptor["RUTRecep"]="33333333-3";
#                                                                                                              
# RAZON SOCIAL RECEPTOR                                                                                        
$Receptor["RznSocRecep"]="RECEPTOR PRUEBAS LTDA.";
#                                                                                                              
# GIRO RECEPTOR                                                                                                
$Receptor["GiroRecep"]="SERVICIOS VARIOS";
#                                                                                                              
# DIRECCION RECEPTOR                                                                                           
$Receptor["DirRecep"]="PROVIDENA 8877";
#                                                                                                              
# COMUNA RECEPTOR                                                                                              
$Receptor["CmnaRecep"]="SANTIAGO";
#                                                                                                              
# CIUDAD RECEPTOR                                                                                              
$Receptor["CiudadRecep"]="SANTIAGO";
#                                                                                                              
# CONTACTO RECEPTOR                                                                                            
$Receptor["Contacto"]="juan perez"; 
#                                                                                                              
# CORREO RECEPTOR                                                                                              
$Receptor["CorreoRecep"]="contacto@factronica.cl";
#                                                                                                              

##############################################################                                                 
#######   TOTALES                                                                                              
##############################################################                                                 
#                                                                                                              
# TASA DE IMPUESTO                                                                                             
$Totales["TasaIVA"]="19";
#                                                                                                              
# NETO AFECTO                                                                                                  
$Totales["MntNeto"]="10000";
#                                                                                                              
# NETO EXENTO                                                                                                  
$Totales["MntExe"]="0";
#                                                                                                              
# MONTO IVA                                                                                                    
$Totales["IVA"]="1900";
#
# Impuesto Adicional Tipo 24=Licores, Piscos, whisky, aguardiente, vinos licorosos o aromatizados
$ImptoReten["24"]["TipoImp"]="24";
# Tasa de Impuesto del Tipo 24
$ImptoReten["24"]["TasaImp"]="31.5";
# Monto de Impuesto del Tipo 24
$ImptoReten["24"]["MontoImp"]="31500";
#
# Impuesto Adicional Tipo 25=Vinos
$ImptoReten["25"]["TipoImp"]="25";
# Tasa de Impuesto del Tipo 24
$ImptoReten["25"]["TasaImp"]="20.5";
# Monto de Impuesto del Tipo 25
$ImptoReten["25"]["MontoImp"]="20500";  
#                                                                                                              
# MONTO TOTAL BRUTO                                                                                            
$Totales["MntTotal"]="11900";

##############################################################                                                 
#######    DETALLE                                                                                             
##############################################################                                                 
#                                                                                                              
#                                                                                                              
$detalle["1"]["NroLinDet"]="1";
# Nombre del Item
$detalle["1"]["NmbItem"]="Paracetamol 40 MG.";
#
$detalle["1"]["DscItem"]="Paracetamol 40 Mg. Laboratorio Chile Muestra Médica";
# Tipo de Codigo
$detalle["1"]["TpoCodigo"]="INT1";
#
$detalle["1"]["VlrCodigo"]="110223";
# Unidad de Medida 3 caracteres por ej. UNI
$detalle["1"]["UnmdItem"]="UNI";
# Cantidad
$detalle["1"]["QtyItem"]="2";
# Precio Unitario
$detalle["1"]["PrcItem"]="500";
# Codigo del Impuesto Adicional por ej. 27
$detalle["1"]["CodImpAdic"]="";
# Subtotal
$detalle["1"]["MontoItem"]="1000";
# Descuento Porcentaje
$detalle["1"]["DescuentoPct"]="0";
# Descuento Pesos
$detalle["1"]["DscItemPesos"]="0";
# Switch indicador de item exento 1=si 0=no
$detalle["1"]["IndExe"]="0";

##################################################################                                                
#######    REFERENCIAS DE FACTURACIÓN CONTRA NOTA DE PEDIDO/VENTA                                                                              
##################################################################
#
# Debe ir vacio
$doc_referencia["1"]["IndGlobal"]="";    
#
# Folio de la Nota de Pedido o Nota de venta
$doc_referencia["1"]["FolioRef"]="3345";                                                  
#
# 802 es el codigo para notas de pedido/venta
$doc_referencia["1"]["TpoDocRef"]="802"; 
#
# Comentario de la Referencia
$doc_referencia["1"]["RazonRef"]="Nota de Pedido 3345";                                                           
#
# El codigo de referencia debe ir vacio
$doc_referencia["1"]["CodRef"]="";
#
# Fecha de de emisión de la nota de pedido formato aaaa-mm-dd
$doc_referencia["1"]["FchRef"]="2016-04-28";   
 
##############################################################                                                 
#######   DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA                                                       
##############################################################                                                 
#                                                                                                              
#                                                                                                              
# MODULO DEL CERTIFICADO                                                                                       
$certificado["Modulus"]="nnnnnnnnnnn";                                                                           
#                                                                                                              
# EXPONENTE DEL CERTIFICADO                                                                                    
$certificado["Exponent"]="nnnn";                                                                                 
#                                                                                                              
# CERTIFICADO X509                                                                                             
$certificado["X509Certificate"]="nnnnnnnn";
#                                                                                                                                                                                    
# LLAVE PRIVADA SIN CLAVE                                                                                      
$certificado["PrivKey"]="nnnnnnn";
##############################################################                                                 
#######   CARGAR DATOS DE TIMBRAJE DE FOLIOS                                                                   
##############################################################                                                 
# RUT EMISOR                                                                                                   
$CAF["RE"]="777777-7";
#                                                                                                              
#                                                                                                              
# RAZON SOCIAL EMISOR                                                                                          
$CAF["RS"]="PRUEBA LIMITADA";
#                                                                                                              
#                                                                                                              
# TIPO DE DOCUMENTO                                                                                            
$CAF["TD"]="33";
#                                                                                                              
#                                                                                                              
# FOLIO DESDE                                                                                                  
$CAF["RNG_D"]="1";
#                                                                                                              
#                                                                                                              
# FOLIO HASTA                                                                                                  
$CAF["RNG_H"]="80";
#                                                                                                              
#                                                                                                              
# FECHA AUTORIZACION TIMBRAJE                                                                                  
$CAF["FA"]="2016-07-29";
#                                                                                                              
#                                                                                                              
# MODULO LLAVE PRIVADA TIMBRAJE                                                                                
$CAF["RSAPK_M"]="oLg1fXeWla8+UCYiRF2TjJaUMtsjE8B1iAhft89Z+nt28X/ZirKjLelHtLziOxPEqvhJZcC3mLTlUZmhUNn4FQ==";
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
$CAF["FRMA"]="m3Fbb+Qkb25+kbAwtU7Z9usUEv+yE4SV58PsLCWEHt1WJQNJGoIuGo86NhhyLCLqFRgHO1OC/u0o74LIRRifIg==";
#                                                                                                              
#                                                                                                              
# LLAVE PRIVADA DEL TIMBRAJE                                                                                   
$CAF["RSASK"]="-----BEGIN RSA PRIVATE KEY----- MIIBOQIBAAJBAKC4NX13lpWvPlAmIkRdk4yWlDLbIxPAdYgIX7fPWfp7dvF/2Yq
y oy3pR7S84jsTxKr4SWXAt5i05VGZoVDZ+BUCAQMCQGsleP5PubkffuAZbC2Tt7MP DXc8wg0q+QVa6nqKO/xRQM1X61tOVmUMAgvdjxd39wBLQjCs0VACVcb9Ay11EvMC 
IQDOV+DHoqAGMIjct0V/NQhmmovllXLPBRBk3/nfbMOkGwIhAMdlmzDfHRtlzmfr qwxi12uP+4CHSq6boP/HJD0f5rePAiEAiY/rL8HABCBbPc+DqiNa7xGymQ5MigNg Qz/76kiCbWcCIQCE7md16hNnmTRFR8ddlzpHtVJVr4cfEmtVL21+FUR6XwIgJppW G8JRwJz6QFYnzfW/v/+JB/TKD6FHytwp4ODCvac= -----END RSA 
PRIVATE KEY----- ";
#                                                                                                              
#                                                                                                              
# LLAVE PUBLICA DEL TIMBRAJE                                                                                   
$CAF["RSAPUBK"]="-----BEGIN PUBLIC KEY----- MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBAKC4NX13lpWvPlAmIkRdk4yWlDLbIxPA dYgIX7fPWfp7dvF/2Yqyoy3pR7S84jsTxKr4SWXAt5i05VGZoVDZ+BUCAQM= -----END PUBLIC KEY----- ";
?> 

 
