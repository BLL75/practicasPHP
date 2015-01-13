<!--
Selector de provincias y localidades Ajax - non intrusive - Cross browser 
Copyright (C)Iñaki Gorostiza Esquerdeiro
http://www.hellogoogle.com
webmaster@hellogoogle.com 
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
-->
<html>
<head>
<title>Selector dinámico Ajax provincias y localidades de  España</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="js/AjaxCode.js"></script>
</head>
<body>
Seleccione su provincia:
<select name="provinciaList" id="provinciaList" onChange="return provinciaListOnChange()">
<option >Seleccione su provincia...</option>		
<?php
$xml = simplexml_load_file('provinciasypoblaciones.xml');
$result = $xml->xpath("/lista/provincia/nombre | /lista/provincia/@id");
for ($i=0;$i<count($result);$i+=2) 
{
$e=$i+1;
$provincia=UTF8_DECODE($result[$e]);
echo("<option value='$result[$i]'>$provincia</option>");
}
?>
</select>

	<br>
	<br>
Seleccione su localidad:
	<select name="localidadList" id="localidadList" >
<option >Seleccione antes una provincia</option>
	</select> <span id="advice"> </span>
</body>
</html>