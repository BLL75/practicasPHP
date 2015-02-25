<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-01 02:18:38
         compiled from "historial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:920954cc2c2b622505-27984370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1948f62eb670174375adaa3d92ab9eaa1955dc3d' => 
    array (
      0 => 'historial.tpl',
      1 => 1422753515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '920954cc2c2b622505-27984370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cc2c2b697804_46430556',
  'variables' => 
  array (
    'sesion' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc2c2b697804_46430556')) {function content_54cc2c2b697804_46430556($_smarty_tpl) {?>
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
