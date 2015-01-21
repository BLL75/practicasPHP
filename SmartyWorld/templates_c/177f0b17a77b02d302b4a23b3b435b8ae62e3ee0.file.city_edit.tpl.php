<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-21 19:48:50
         compiled from "city_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2551454bfefd866ff33-82990164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177f0b17a77b02d302b4a23b3b435b8ae62e3ee0' => 
    array (
      0 => 'city_edit.tpl',
      1 => 1421866128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2551454bfefd866ff33-82990164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bfefd86ea056_73153820',
  'variables' => 
  array (
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bfefd86ea056_73153820')) {function content_54bfefd86ea056_73153820($_smarty_tpl) {?><html>
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
