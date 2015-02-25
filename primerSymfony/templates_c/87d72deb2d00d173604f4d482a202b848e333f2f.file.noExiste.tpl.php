<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 23:42:56
         compiled from "noExiste.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3176054d3c8f1e2c209-82350940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87d72deb2d00d173604f4d482a202b848e333f2f' => 
    array (
      0 => 'noExiste.tpl',
      1 => 1423176172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3176054d3c8f1e2c209-82350940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d3c8f2016a87_21340776',
  'variables' => 
  array (
    'lista' => 0,
    'curr_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d3c8f2016a87_21340776')) {function content_54d3c8f2016a87_21340776($_smarty_tpl) {?>            <h1>La id introducida no existe</h1>


            
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
