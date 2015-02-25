<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 21:13:56
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:988954ca9484710981-06721952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe5cdfe56e59b43cd9130cee6428e61ba6b2bf3' => 
    array (
      0 => 'historial.tpl',
      1 => 1422298386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988954ca9484710981-06721952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sesion' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ca94847acd88_95908181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca94847acd88_95908181')) {function content_54ca94847acd88_95908181($_smarty_tpl) {?><html>
	<head></head>
	<body>
	   
	   
	    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sesion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				 <h2><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</h2></br>
		<?php } ?>
	</body>
</html><?php }} ?>
