<html>
<head>
       <title>Cities of the world</title>
	  <h1 align = "center">Name of the City</h1>
	  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
{foreach from=$list item=row}
	<input type="text" value = {$row} ></input></br>
{/foreach}


<select id="my_select">
{section name=outer loop=$fila2}
	 
     {if $fila2[outer].code == $codigoPais}
	   <option value='"{$fila2[outer].code}"' selected>{$fila2[outer].name}</option>
     {else}
	   <option value='"{$fila2[outer].code}"'>{$fila2[outer].name}</option>	  
	 {/if}
{/section}
</select>



<script>
    /*console.log(document.getElementById('my_select'));*/
	//$.each(console.log($('option').val()));
	$('option').each(function(){
		console.log($(this).val());
	});
</script>


