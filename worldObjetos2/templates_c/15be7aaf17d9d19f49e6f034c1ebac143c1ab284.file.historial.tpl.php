<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 19:53:08
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681054c6819937b2b6-73030514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15be7aaf17d9d19f49e6f034c1ebac143c1ab284' => 
    array (
      0 => 'historial.tpl',
      1 => 1422298386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681054c6819937b2b6-73030514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c681993b8347_91251720',
  'variables' => 
  array (
    'sesion' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c681993b8347_91251720')) {function content_54c681993b8347_91251720($_smarty_tpl) {?><html>
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
