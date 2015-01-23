<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 17:28:34
         compiled from "city_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2604954c12532612b03-99350436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3e118c7ab93a2174fea580d6eebee32d9c356b' => 
    array (
      0 => 'city_delete.tpl',
      1 => 1421943069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2604954c12532612b03-99350436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c12532683f87_99628841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c12532683f87_99628841')) {function content_54c12532683f87_99628841($_smarty_tpl) {?><html>
	 <head></head>
	 <body>
	    <h2>Ciudad eliminada</h2>
        <p><a href="cities.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Volver al formulario</a></p>
	 
	 </body>
</html><?php }} ?>
