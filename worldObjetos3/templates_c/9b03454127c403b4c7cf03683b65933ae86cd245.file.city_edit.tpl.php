<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 17:18:13
         compiled from "city_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3010654c122c575eb84-06673917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b03454127c403b4c7cf03683b65933ae86cd245' => 
    array (
      0 => 'city_edit.tpl',
      1 => 1421942690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3010654c122c575eb84-06673917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c122c57ef408_42713646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c122c57ef408_42713646')) {function content_54c122c57ef408_42713646($_smarty_tpl) {?><html>
	<head>
		  <title>Editando ciudades del mundo</title>
		  <h1 align = "center">Editar la ciudad</h1>
	<head>
	<body>
	  
	  
	 
		<form action="city_save.php" method="GET">
			City Name: <input type="text" name="City_Name" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['name'];?>
"><br/>
			<br/>
			City District: <input type="text" name="City_District" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['district'];?>
"><br/>
			<br/>
			City_Population: <input type="text" name="City_Pop" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['poblacion'];?>
"><br/>
			<br/>
			<input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['ID'];?>
">
			<input type="submit" name="Submit" value="Insert">
		</form>
		
	</body>
</html><?php }} ?>
