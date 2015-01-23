
	{$mensaje}
	
	{if $Approved=="Yes"}
		<a href="destroy.php">Cierra sesión</a>
	{else}
	<form action="{$url}" method="POST">
		<p>Username: <input type="text" name="uname"></p>
		<p>Password: <input type="password" name="pword"></p>
		<input type="hidden" name="access_requested" value="yes">
		<p><input type="submit" value="Login"></p>
	</form>
	{/if}
	