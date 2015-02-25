<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-11 20:10:32
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190054dba928a7d8c2-30318276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ece06abd29ebf9116bd1899dd4f13291494216' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422665494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190054dba928a7d8c2-30318276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dba928aba952_38102290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dba928aba952_38102290')) {function content_54dba928aba952_38102290($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
