<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 23:53:48
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9154d3f47c699106-53054967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62cde117c96f0b4a7ae80814c15c5259b2256aee' => 
    array (
      0 => 'historial.tpl',
      1 => 1422753516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9154d3f47c699106-53054967',
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
  'unifunc' => 'content_54d3f47c712f04_24390478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d3f47c712f04_24390478')) {function content_54d3f47c712f04_24390478($_smarty_tpl) {?>
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
