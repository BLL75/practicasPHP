<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-01 20:16:34
         compiled from "security.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2438254cc2f5e81a385-50997919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf7befc9055e90092d559494814e4d0d25bfc0e' => 
    array (
      0 => 'security.tpl',
      1 => 1422818181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2438254cc2f5e81a385-50997919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cc2f5e8d1d08_40069442',
  'variables' => 
  array (
    'mensaje' => 0,
    'Approved' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc2f5e8d1d08_40069442')) {function content_54cc2f5e8d1d08_40069442($_smarty_tpl) {?>    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
	 <!-- Bootstrap core CSS -->
    <link href="https://dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    
	<body  class="center-block" background="mapaMundi.jpg">
	    <div class="col-lg-6 col-lg-offset-3 text-center">
	        <h3 align='center'><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
		</div>
        <?php if ($_smarty_tpl->tpl_vars['Approved']->value=="Yes") {?>
		    <div class="col-lg-3 col-lg-offset-1 text-center">
                <a href='destroy.php' class="close" aria-hidden="true">Cierra sesion</button>
			</div>
		<?php } else { ?>
			<div class="container">
			  <form class="form-inline" action='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
' method='POST'>
				<h2 class="form-signin-heading">Please sign in</h2>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail"  name='uname' placeholder="Email address" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" name='pword' placeholder="Password" required>
				<input type="hidden" name="access_requested" value="yes">
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="remember-me"> Remember me
				  </label>
				</div>
				<button class="btn btn-default" type="submit" value='Login'>Sign in</button>
			  </form>
			</div> <!-- /container -->
		<?php }?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
	<?php }} ?>
