<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-31 16:53:28
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754054ccfa786be904-18345783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5fe2a11f78c3cba6715c7040fd67b92243d7f64' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422665492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754054ccfa786be904-18345783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ccfa78710988_72863083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ccfa78710988_72863083')) {function content_54ccfa78710988_72863083($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
