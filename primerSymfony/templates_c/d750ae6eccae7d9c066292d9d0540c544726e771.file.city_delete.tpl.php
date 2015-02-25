<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-30 19:52:28
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3161554cbd2ece4e1c8-95650557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd750ae6eccae7d9c066292d9d0540c544726e771' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1422041738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3161554cbd2ece4e1c8-95650557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cbd2ecec82e9_87090048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cbd2ecec82e9_87090048')) {function content_54cbd2ecec82e9_87090048($_smarty_tpl) {?><html>
<head></head>
	<body>
		<h2>Ciudad eliminada</h2>
		<p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	</body>
</html><?php }} ?>
