<?php 
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
$sql="CREATE DATABASE Place";
if(mysqli_query($conn,$sql)){
    echo "database created successfully";
}
mysqli_close($conn);
?>