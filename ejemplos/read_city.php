<html>
<head>
<title>Read City Form Submission</title>
</head>
<body>
<?php
/* Read in connection information */
require("../../connection_info.php");
/* Connect to MySQL server */
$linkID1 = new mysqli($dbhost,$dbuser,$dbpass,"world");
/* Exit with error message if there is a problem */
if ($linkID1->connect_error) {
echo "Connection Error ($linkID1->connect_errno)
$linkID1->connect_error\n";
exit;
}
$SQLexecute = "UPDATE City SET CountryCode='$City_CountryCode',
Name='$City_Name', District='$City_District',
Population=$City_Pop WHERE ID=$City_ID";
$query_execute = $linkID1->query($SQLexecute);
/* Exit with error message if problem with query execution */
if (!$query_execute) {
echo "Query Error: $linkID1->error\n";
exit;
}
print <<<Group1
<h2>Update successful</h2>
<p><a href="city_form.php?CityCode=$City_ID">Return to City Form</a></p>
Group1;

print <<<Group2
</select><br/>
<br/>
City Name: <input type="text" name="City_Name" value="$form_Name"><br/>
<br/>
City District: <input type="text" name="City_District"
value="$form_District"><br/>
<br/>
City Population: <input type="text" name="City_Pop"
value="$form_Pop"><br/>
<br/>
<input type="hidden" name="City_ID" value="$form_ID">
<input type="submit" name="Submit" value="Submit">
</form>
Group2;

			mysql_close($link);
			// $linkID1->close();




?>
</body>
</html>

