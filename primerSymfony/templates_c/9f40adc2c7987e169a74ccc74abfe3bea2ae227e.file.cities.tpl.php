<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 18:53:55
         compiled from "cities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2461354c29d980f4244-77452153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f40adc2c7987e169a74ccc74abfe3bea2ae227e' => 
    array (
      0 => 'cities.tpl',
      1 => 1422381230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2461354c29d980f4244-77452153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c29d9816e360_83887194',
  'variables' => 
  array (
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c29d9816e360_83887194')) {function content_54c29d9816e360_83887194($_smarty_tpl) {?><html>
	<head></head>
	<body>
	    
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="offset1 span1 pull-left" style="bottom:0;">
					<h1>Cities of the world</h1>		
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['name'] = 'outer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total']);
?>
						</br>
						<a href='city_edit.php?ID=<?php echo $_smarty_tpl->tpl_vars['lista']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['id'];?>
'>--<?php echo $_smarty_tpl->tpl_vars['lista']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['id'];?>
--</a><?php echo $_smarty_tpl->tpl_vars['lista']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['name'];?>
				 
					<?php endfor; endif; ?>
				</div>
			</div>
		</div>
	
	<body>
</html>


<div class="container-fluid">
  <div class="row-fluid">
    <div class="offset1 span8 pull-right">
    ... Widget 1...
    </div>

    <div class="offset1 span8 pull-left" style="bottom:0;">
    ... Widget 2...
    </div>

    .... a lot of content ....

  </div>

</div><!--/.fluid-container--><?php }} ?>
