<?php
// Obtain a connection object by connecting to the db
//global $username;
$username= $_GET['username'];
if ($username)
{
	return 0;
}
else
{
	$username = "Hello";
}
echo $username."<h1>My Answers</h1>";

$connection = @mysqli_connect (localhost,  Shinobi, Shinobi, akademia);

if (mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}
else
{
echo "<h2>Question:Answer </h2>";
}
$query= "Select * from yang";
$resultset = mysqli_query($connection,$query);
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
echo "<input type=\"submit\" class=\"button\" name=\"".$row[0]."\"
value=\"delete\"/>"; 
echo " Question: "."\n".$row[1]." My Answer: ".$row[2]." "."<br>";

}

?>