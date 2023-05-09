<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="customersdata";

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

$sql_query = "INSERT INTO entry_details (Full_name,E_mail,Number) VALUES ('$name','$email','$number')";
if(mysqli_query($conn, $sql_query))
{
    echo "New Details Entry inserted succesfully !";
}
else
{
echo "Error: ";
}
mysqli_close($conn);
}
?>