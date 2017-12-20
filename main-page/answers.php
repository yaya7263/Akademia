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

$connection = @mysqli_connect ("us-cdbr-iron-east-05.cleardb.net","bd3fcecabf9772","5d8459590dc1396","heroku_7aac2bb813d6144");

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
