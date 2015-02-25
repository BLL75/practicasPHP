<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-10 20:19:45
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1685054da59d1cdfe61-04875786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73bc256336054ffd87212cc4af24bf5131a3e835' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422665494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1685054da59d1cdfe61-04875786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54da59d1d1cef2_27424784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54da59d1d1cef2_27424784')) {function content_54da59d1d1cef2_27424784($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
