<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-12 00:44:01
         compiled from "city_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1252854dbe9419b5286-71674058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2db1d00ddf3723db1ca8f68187d7694c09b71cbb' => 
    array (
      0 => 'city_edit.tpl',
      1 => 1422731206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252854dbe9419b5286-71674058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'district' => 0,
    'poblacion' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dbe941a74904_59392755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dbe941a74904_59392755')) {function content_54dbe941a74904_59392755($_smarty_tpl) {?><html>
	<head>
		<title>Editando ciudades del mundo</title>    
	<head>
	<body>
	  
	  
	    <div class="col-lg-2 col-lg-offset-4 text-center">
		    <h1 align = "center">Editar la ciudad</h1>
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
				<input type="submit" class="btn btn-default" name="Submit" value="Insert">
			</form>
		</div>
		
	</body>
</html><?php }} ?>
