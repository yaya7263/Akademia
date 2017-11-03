<?php

$Name = $_REQUEST['Name'];
$UserName = $_REQUEST['UserName'];
$Password = $_REQUEST['Password'];

$connection = @mysqli_connect (localhost,  root, Password, ProjectDB);

$query = "insert into logintable (name, qty, price) values ('$Name','$UserName','$Password')";
$resultset = mysqli_query($connection,$query);
if ($resultset){
echo  "<h1>Inserted successfully into the database</h1>";
}
?>
