<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 20:22:45
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2656654c29f85e4e1c3-76951002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e45f92ccf92daa98eb3712e31d697a1d4b906af' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422027048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2656654c29f85e4e1c3-76951002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c29f85e8b259_65577416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c29f85e8b259_65577416')) {function content_54c29f85e8b259_65577416($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
