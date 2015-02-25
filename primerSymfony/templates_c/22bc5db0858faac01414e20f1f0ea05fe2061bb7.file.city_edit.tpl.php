<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-06 20:24:21
         compiled from "city_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1222354d514e5319754-06661791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22bc5db0858faac01414e20f1f0ea05fe2061bb7' => 
    array (
      0 => 'city_edit.tpl',
      1 => 1422731206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1222354d514e5319754-06661791',
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
  'unifunc' => 'content_54d514e5393877_68682137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d514e5393877_68682137')) {function content_54d514e5393877_68682137($_smarty_tpl) {?><html>
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
