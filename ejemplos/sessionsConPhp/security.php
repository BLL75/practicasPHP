<?php
	session_start();

	if (isset($_POST["access_requested"]) and 
	($_POST["access_requested"]=="yes")) {
		if ($_POST["uname"]=="User" && $_POST["pword"]=="training") {
			$_SESSION["Approved"]="Yes";
		} else {
			echo "<p>Incorrect Username and/or Password, please try again</p>";
			$_SESSION["Approved"]="No"; 
		}
	}
	
	if (isset($_SESSION["Approved"]) AND 
		($_SESSION["Approved"]=="Yes")) {
			echo "<!-- HTML Comment, Access Approved, not visible in output -->";
			echo '<a href="close.php">Log out</a>';
		} else {
		$req_URL = $_SERVER["REQUEST_URI"];
print <<<GROUP1
<form action="$req_URL" method="POST">
<p>Username: <input type="text" name="uname"></p>
<p>Password: <input type="password" name="pword"></p>
<input type="hidden" name="access_requested" value="yes">
<p><input type="submit" value="Login"></p>
</form>
GROUP1;
		exit;
	}
	 
?>