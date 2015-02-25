<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-10 18:53:03
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2569354da457f7de297-81235197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62410f17a70a2a6db749cd123106156d0b8b61cf' => 
    array (
      0 => 'historial.tpl',
      1 => 1422753516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2569354da457f7de297-81235197',
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
  'unifunc' => 'content_54da457f90f569_86684088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54da457f90f569_86684088')) {function content_54da457f90f569_86684088($_smarty_tpl) {?>
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
