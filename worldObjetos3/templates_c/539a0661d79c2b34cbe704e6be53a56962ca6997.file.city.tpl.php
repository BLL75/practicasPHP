<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-10 19:45:13
         compiled from "city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:873254da51b99c6715-60006492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '539a0661d79c2b34cbe704e6be53a56962ca6997' => 
    array (
      0 => 'city.tpl',
      1 => 1422731410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '873254da51b99c6715-60006492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'key' => 0,
    'row' => 0,
    'fila2' => 0,
    'codigoPais' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54da51b9e4e1c2_77881989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54da51b9e4e1c2_77881989')) {function content_54da51b9e4e1c2_77881989($_smarty_tpl) {?><html>
<head>
	<title>Cities of the world</title>
	
	<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
	   
	
</head>
	<body>
	    <div class="row">
		   <div class="col-lg-2 col-lg-offset-4 text-center">
			   <h1>Name of the City</h1>
			   <h1>Editar la ciudad</h1>
		   </div>
		</div>
	    <div>
			
        </div>		
	    <div class="col-lg-2 col-lg-offset-4 text-center">
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
			    <?php if ($_smarty_tpl->tpl_vars['key']->value!='gbd'&&$_smarty_tpl->tpl_vars['key']->value!='countrycode') {?>
					<h2 class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h2>
					<input type="text" class="form-control" value = <?php echo $_smarty_tpl->tpl_vars['row']->value;?>
></input></br>  			  				 
				<?php }?>
				
			<?php } ?>
			<h2>Pais</h2>
			<select id="my_select" class="col-sm-12">
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
"' class="form-control" selected><?php echo $_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['name'];?>
</option>
				<?php } else { ?>
				    
					<option value='"<?php echo $_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['code'];?>
"' class="form-control"><?php echo $_smarty_tpl->tpl_vars['fila2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]['name'];?>
</option>
				<?php }?>
			<?php endfor; endif; ?>
			</select>
		
		
			<input type="hidden" name="City_ID" class="form-control" value="$form_ID">
			<p><a href="city_edit.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Editar ciudad</a></p>
			<p><a href="city_delete.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Eliminar ciudad</a></p>
		</div>
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
