<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-13 19:17:58
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2757654de3fd65b8d81-19053549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc2cdcb1b9636a0fda15eb4d53f1bab1cb8d4e3' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422665494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2757654de3fd65b8d81-19053549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54de3fd65f5e13_44908171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de3fd65f5e13_44908171')) {function content_54de3fd65f5e13_44908171($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
