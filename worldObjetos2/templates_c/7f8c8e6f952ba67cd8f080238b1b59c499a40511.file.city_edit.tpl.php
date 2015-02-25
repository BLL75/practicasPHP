<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-10 20:45:13
         compiled from "city_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2054754d8f822af79e7-96634704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f8c8e6f952ba67cd8f080238b1b59c499a40511' => 
    array (
      0 => 'city_edit.tpl',
      1 => 1423597511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2054754d8f822af79e7-96634704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d8f822baeb93_36482224',
  'variables' => 
  array (
    'name' => 0,
    'district' => 0,
    'poblacion' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d8f822baeb93_36482224')) {function content_54d8f822baeb93_36482224($_smarty_tpl) {?><html>
	<head>
		<title>Editando ciudades del mundo</title>    
	<head>
	<body>
	  
	  
	    <div class="col-lg-2 col-lg-offset-4 text-center">
		    
			<h3>Editar la ciudad</h3>
			<form action="city_save.php" method="GET" class='form-horizontal'>
				City Name: <input type="text" class="form-control" name="City_Name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br/>
				<br/>
				City District: <input type="text" class="form-control" name="City_District" value="<?php echo $_smarty_tpl->tpl_vars['district']->value;?>
"><br/>
				<br/>
				City_Population: <input type="text" class="form-control" name="City_Pop" value="<?php echo $_smarty_tpl->tpl_vars['poblacion']->value;?>
"><br/>
				<br/>
				<input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<input type="submit" class="btn btn-default" name="Submit" value="Editar">
			</form>
		</div>
		
	</body>
</html><?php }} ?>
