<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 19:25:47
         compiled from "city_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2097454ca7b2b153d84-93253650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea8e741d2669792910b947cf4b1eb9c2784673f3' => 
    array (
      0 => 'city_edit.tpl',
      1 => 1422474655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2097454ca7b2b153d84-93253650',
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
  'unifunc' => 'content_54ca7b2b213403_14234305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca7b2b213403_14234305')) {function content_54ca7b2b213403_14234305($_smarty_tpl) {?><html>
	<head>
		<title>Editando ciudades del mundo</title>    
	<head>
	<body>
	  
	  
	    <div class="col-lg-6 col-lg-offset-3 text-center">
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
