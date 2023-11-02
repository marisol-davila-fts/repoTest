<!doctype html public "-//w3c//dtd html 4.0 transitional//en">

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>PHP-JRU with PHP/Java Bridge</title>
</head>
<body bgcolor="#FFFFFF">
<H1>PHP-JRU with PHP/Java Bridge</H1>

Ya configuró y activo PHP/Java Bridge junto con las libreías JasperReport.
<br/><br/>

Ahora incluya PHP-JRU en su script de php:

<br/><br/>

<code>

      require_once("../PHP-JRU/PHP-JRU.php");

</code>

<br/><br/>

<b>
	Conectores JDBC
</b>

<table  border="1" style="width: 100%;">
	<tr>
		<th>
			Archivo
		</th>
		<th>
			Descipción (DB)
		</th>
	</tr>
	<tr>
		<td>postgresql-8.1dev-400.jdbc3.jar</td>
		<td>postgresql</td>
	</tr>

	<tr>
		<td>jtds-1.2.5.jar</td>
		<td>MsSql (only *nix)</td>
	</tr>
	<tr>
		<td>mysql-connector-java-3.1.11-bin.jar</td>
		<td>Mysql <br>NOTA: es probable que tenga que actualizar este controlador</td>
	</tr>
	
	<tr>
		<td>sqlitejdbc-v056.jar</td>
		<td>Sqlite</td>
	</tr>

</table>


<br/><br/>

<b>
Librerias otros archivos jar agregados al classpath
</b>

<div>
<br/> alticJasper.jar
<br/> barbecue-1.5-beta1.jar
<br/> barcode4j-2.0.jar
<br/> bcel-5.2.jar
<br/> cincom-jr-xmla.jar
<br/> commons-beanutils-1.8.2.jar
<br/> commons-collections-3.2.1.jar
<br/> commons-dbcp-1.2.2.jar
<br/> commons-digester-1.7.jar
<br/> commons-javaflow-20060411.jar
<br/> commons-logging-1.1.jar
<br/> commons-math-1.0.jar
<br/> commons-pool-1.3.jar
<br/> commons-vfs-1.0.jar
<br/> dom4j-1.6.jar
<br/> ehcache-1.1.jar
<br/> eigenbase-properties-1.1.0.10924.jar
<br/> eigenbase-resgen-1.3.0.11873.jar
<br/> eigenbase-xom-1.3.0.11999.jar
<br/> ejb3-persistence.jar
<br/> groovy-all-1.7.5.jar
<br/> hsqldb-1.8.0-10.jar
<br/> iText-2.1.7.jar
<br/> iTextAsian.jar
<br/> jakarta-bcel-20050813.jar
<br/> jasperreports-4.0.0.jar
<br/> jasperreports-chart-themes-4.0.0.jar
<br/> jasperreports-extensions-3.5.3.jar
<br/> jasperreports-fonts-4.0.0.jar
<br/> javacup.jar
<br/> javassist-3.4.GA.jar
<br/> jaxen-1.1.1.jar
<br/> jcommon-1.0.15.jar
<br/> jdt-compiler-3.1.1.jar
<br/> jfreechart-1.0.12.jar
<br/> jpa.jar
<br/> js_activation-1.1.jar
<br/> js_axis-1.4patched.jar
<br/> js_commons-codec-1.3.jar
<br/> js_commons-discovery-0.2.jar
<br/> js_commons-httpclient-3.1.jar
<br/> js_jasperserver-common-ws-3.5.0.jar
<br/> js_jaxrpc.jar
<br/> js_mail-1.4.jar
<br/> js_saaj-api-1.3.jar
<br/> js_wsdl4j-1.5.1.jar
<br/> jta.jar
<br/> jxl-2.6.10.jar
<br/> png-encoder-1.5.jar
<br/> poi-3.6-20091214.jar
<br/> rex-20080421.jar
<br/> rhino-1.7R1.jar
<br/> saaj-api-1.3.jar
<br/> slf4j-api.jar
<br/> slf4j-log4j12.jar
<br/> spring.jar
<br/> sqleonardo-2009.03.rc1.jar
<br/> swingx-2007_10_07.jar
<br/> xml-apis.jar
<br/> xml-apis-ext.jar 
</div>
</body>
</html>
