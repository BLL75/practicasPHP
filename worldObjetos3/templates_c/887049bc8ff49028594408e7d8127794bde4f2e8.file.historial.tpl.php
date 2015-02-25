<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-30 19:14:09
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2450754c91db8aba951-66497852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '887049bc8ff49028594408e7d8127794bde4f2e8' => 
    array (
      0 => 'historial.tpl',
      1 => 1422298388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2450754c91db8aba951-66497852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c91db8af79e9_05887470',
  'variables' => 
  array (
    'sesion' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c91db8af79e9_05887470')) {function content_54c91db8af79e9_05887470($_smarty_tpl) {?><html>
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
