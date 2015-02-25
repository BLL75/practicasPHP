<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-22 15:49:34
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2081054e9ec7e678401-52123649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ed9d8a1f19217f08c7f1c644c206dba5cf095b4' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422665494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081054e9ec7e678401-52123649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e9ec7e753003_28247320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9ec7e753003_28247320')) {function content_54e9ec7e753003_28247320($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
