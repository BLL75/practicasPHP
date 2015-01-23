<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 20:13:22
         compiled from "security.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929754c290d6b34a76-69188313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e4bbe3052426b8ff6e3296e4dcb14f7cd9d1d9' => 
    array (
      0 => 'security.tpl',
      1 => 1422040401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929754c290d6b34a76-69188313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c290d6baeb95_50713875',
  'variables' => 
  array (
    'mensaje' => 0,
    'Approved' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c290d6baeb95_50713875')) {function content_54c290d6baeb95_50713875($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

	
	<?php if ($_smarty_tpl->tpl_vars['Approved']->value=="Yes") {?>
		<a href="destroy.php">Cierra sesión</a>
	<?php } else { ?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="POST">
		<p>Username: <input type="text" name="uname"></p>
		<p>Password: <input type="password" name="pword"></p>
		<input type="hidden" name="access_requested" value="yes">
		<p><input type="submit" value="Login"></p>
	</form>
	<?php }?>
	<?php }} ?>
