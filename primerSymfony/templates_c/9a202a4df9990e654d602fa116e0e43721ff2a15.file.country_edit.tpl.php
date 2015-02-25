<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-24 16:58:12
         compiled from "country_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122054ec9d51c28cb2-98942812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a202a4df9990e654d602fa116e0e43721ff2a15' => 
    array (
      0 => 'country_edit.tpl',
      1 => 1424793451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122054ec9d51c28cb2-98942812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ec9d51c65d41_76734210',
  'variables' => 
  array (
    'sesionPais' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ec9d51c65d41_76734210')) {function content_54ec9d51c65d41_76734210($_smarty_tpl) {?><div class="page-header">
    <ul class="list-group">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sesionPais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<li class="list-group-item"><h1 class="bg-success"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</h1></li>
		<?php } ?>
	</ul>
</div><?php }} ?>
