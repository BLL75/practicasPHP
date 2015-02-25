<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 17:07:57
         compiled from "city_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997654c29efe6ea051-12292866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177f0b17a77b02d302b4a23b3b435b8ae62e3ee0' => 
    array (
      0 => 'city_edit.tpl',
      1 => 1422374873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997654c29efe6ea051-12292866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c29efe764171_38352843',
  'variables' => 
  array (
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c29efe764171_38352843')) {function content_54c29efe764171_38352843($_smarty_tpl) {?><html>
	<head>
		<title>Editando ciudades del mundo</title>    
	<head>
	<body>
	  
	  
	    <div class="col-lg-6 col-lg-offset-3 text-center">
		    <h1 align = "center">Editar la ciudad</h1>
			<form action="city_save.php" method="GET" class='form-horizontal'>
				City Name: <input type="text" class="form-control" name="City_Name" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['name'];?>
"><br/>
				<br/>
				City District: <input type="text" class="form-control" name="City_District" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['district'];?>
"><br/>
				<br/>
				City_Population: <input type="text" class="form-control" name="City_Pop" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['poblacion'];?>
"><br/>
				<br/>
				<input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['lista']->value['ID'];?>
">
				<input type="submit" class="btn btn-default" name="Submit" value="Insert">
			</form>
		</div>
		
	</body>
</html><?php }} ?>
