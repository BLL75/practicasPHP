<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-24 16:17:05
         compiled from "noExiste.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1703154ec95f15f5e15-97404473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb3994c21abeec7b498958a28570c12b3f15251' => 
    array (
      0 => 'noExiste.tpl',
      1 => 1423176174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703154ec95f15f5e15-97404473',
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
  'unifunc' => 'content_54ec95f166ff32_80987284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ec95f166ff32_80987284')) {function content_54ec95f166ff32_80987284($_smarty_tpl) {?>            <h1>La id introducida no existe</h1>


            
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
