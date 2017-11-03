<?php
// Obtain a connection object by connecting to the db

echo "<h1>My Login Application</h1>";

$connection = @mysqli_connect (localhost,  root, password, ProjectDB);

if (mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}
else
{
echo "<h4>Successfully connected to MySQL: </h4>";
}

//Displays table contents
$query= "Select * from logintable";
$resultset = mysqli_query($connection,$query);
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
echo "<input type=\"submit\" class=\"button\" name=\"".$row[0]."\"
value=\"delete\"/>";
echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]."<br>";

}

Echo "<h1>Create a new account</h1>";
?>


<form enctype="multipart/form-data"
action="http://localhost/SQLInsertHandler.php">
<p>Id:&nbsp <input type="text" name="Id" size="10" maxlength="11" /></p>
<p>Name:&nbsp <input type="text" name="FirstName" size="10" maxlength="20" /></p>
<p>UserName:&nbsp <input type="text" name="UserName" size="10" maxlength="30"
/></p>
<p>Password:&nbsp <input type="text" name="Password" size="10" maxlength="10" /></p>
<br>
<input type="submit" value="Add item" /> &nbsp <input type="reset" />
</form>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		$('.button').click(function(){
		var clickBtnName = $(this).attr('name');
		var ajaxurl = 'http://localhost/SQLDeleteHandler.php';
		var data = {'id': clickBtnName};
		$.post(ajaxurl, data, function(response) {
		window.location.href="http://localhost/store.php";
		});
		});
		});
	</script>
</head>
