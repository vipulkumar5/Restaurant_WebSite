<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
  die("Connnection failed: " .mysqli_connect_error());
}
if(isset($_POST['save']))
{
//get data from form
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['mobile'];

$sql_query = "INSERT INTO entry_details (name,email,moblie)
VALUES ('$name','$email','$mobile')";
if(mysqli_query($conn, $sql_query))
{
    echo "New Details Entry inserted succesfully !";
}
else
{
echo "Error: " .$sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}

?>