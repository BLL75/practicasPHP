<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 20:07:04
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2384554ca84d8be2f85-44525850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4622ec816f66d3085c5f55cf96e2b0cf79df915' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422041737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2384554ca84d8be2f85-44525850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ca84d8c7b507_52569599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca84d8c7b507_52569599')) {function content_54ca84d8c7b507_52569599($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
