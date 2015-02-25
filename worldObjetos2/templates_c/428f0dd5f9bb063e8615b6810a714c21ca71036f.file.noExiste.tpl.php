<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-06 19:15:38
         compiled from "noExiste.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2095854d504caec82e9-27342140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '428f0dd5f9bb063e8615b6810a714c21ca71036f' => 
    array (
      0 => 'noExiste.tpl',
      1 => 1423176174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2095854d504caec82e9-27342140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'curr_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d504cb03d099_40493482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d504cb03d099_40493482')) {function content_54d504cb03d099_40493482($_smarty_tpl) {?>            <h1>La id introducida no existe</h1>


            
            <div class="page-header">
			    <?php  $_smarty_tpl->tpl_vars['curr_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr_id']->key => $_smarty_tpl->tpl_vars['curr_id']->value) {
$_smarty_tpl->tpl_vars['curr_id']->_loop = true;
?>
					<ul class="list-group">
						<li class="list-group-item"><h2>La mayor ID existente en BBDD es la :  <?php echo $_smarty_tpl->tpl_vars['curr_id']->value;?>
 </h2></li>
                    </ul>					
				<?php } ?>
			</div><?php }} ?>
