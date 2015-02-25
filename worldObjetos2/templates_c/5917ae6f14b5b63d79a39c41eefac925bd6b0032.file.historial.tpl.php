<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-09 19:10:52
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1811254d8f82c3d0900-41119358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5917ae6f14b5b63d79a39c41eefac925bd6b0032' => 
    array (
      0 => 'historial.tpl',
      1 => 1422753516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1811254d8f82c3d0900-41119358',
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
  'unifunc' => 'content_54d8f82c4c4b47_66102128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d8f82c4c4b47_66102128')) {function content_54d8f82c4c4b47_66102128($_smarty_tpl) {?>
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
