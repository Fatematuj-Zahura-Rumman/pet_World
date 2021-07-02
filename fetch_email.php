<?php
require_once("conn.php");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT email FROM users WHERE email='$search' ";
}
else
{
	$query = "";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<p>Email already taken</p>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<p>Email already taken</p>';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>