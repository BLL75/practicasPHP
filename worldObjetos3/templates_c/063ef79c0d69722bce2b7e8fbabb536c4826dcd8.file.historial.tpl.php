<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-11 19:29:22
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2536854db9f826acfc8-05133567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063ef79c0d69722bce2b7e8fbabb536c4826dcd8' => 
    array (
      0 => 'historial.tpl',
      1 => 1422753516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2536854db9f826acfc8-05133567',
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
  'unifunc' => 'content_54db9f827270e0_37507641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db9f827270e0_37507641')) {function content_54db9f827270e0_37507641($_smarty_tpl) {?>
<div class="page-header">
    <ul class="list-group">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sesion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<li class="list-group-item"><h1 class="bg-success"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</h1></li>
		<?php } ?>
	</ul>
</div>


<?php }} ?>
