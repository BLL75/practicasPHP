<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 20:21:11
         compiled from "city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2294554c29f277de292-04107603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec1de88fcca826b1b1bd8643ead68e229a6accc' => 
    array (
      0 => 'city.tpl',
      1 => 1422027200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2294554c29f277de292-04107603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'fila2' => 1,
    'codigoPais' => 1,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c29f278d24d0_50344445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c29f278d24d0_50344445')) {function content_54c29f278d24d0_50344445($_smarty_tpl) {?><html>
<head>
<title>Cities of the world</title>
<h1 align = "center">Name of the City</h1>
<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
</head>
	<body>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		     <input type="text" value = <?php echo $_smarty_tpl->tpl_vars['row']->value;?>
 ></input></br>
		<?php } ?>
		<select id="my_select">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['name'] = 'outer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fila2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<?php if ($_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['code']==$_smarty_tpl->tpl_vars['codigoPais']->value) {?>
			    <option value='"<?php echo $_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['code'];?>
"' selected><?php echo $_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['name'];?>
</option>
			<?php } else { ?>
			    <option value='"<?php echo $_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['code'];?>
"'><?php echo $_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['name'];?>
</option>
			<?php }?>
		<?php endfor; endif; ?>
		</select>
		<input type="hidden" name="City_ID" value="$form_ID">
		<p><a href="city_edit.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Editar ciudad</a></p>
		<p><a href="city_delete.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Eliminar ciudad</a></p>
		<?php echo '<script'; ?>
>
		/*console.log(document.getElementById('my_select'));*/
		//$.each(console.log($('option').val()));
		$('option').each(function(){
		console.log($(this).val());
		});
		<?php echo '</script'; ?>
>


<?php }} ?>
