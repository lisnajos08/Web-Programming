<?php
$con=mysqli_connect("localhost","20mca035","2594","20mca035");
$id=$_GET["id"];
if($con)
{

$query1="delete from student where id='2'";
if(mysqli_query($con, $query1))
{
echo "Data Removed !<br>";
} 
}
?>