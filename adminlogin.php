<?php
function login()
{
// creating a connection
$link= mysqli_connect("localhost", "root", "tier5", "test");
//creating variables to take input from form
$name= $_POST['name'];
$password= $_POST['password'];

//writing query
$sql = "SELECT * FROM loginadmin where name='$name' AND password='$password'";
//executing query
$ex = mysqli_query($link, $sql);
//check if its executing or not
if($ex)
{
	echo "Logged in Successfully";

}

else
{
	echo "failed to log in ";
}
//closing connection
mysqli_close($link);
}

if($_POST[btn]=== "login")
{
	login();
}

?>
