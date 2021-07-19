<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="place";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed: ".mysqli_connect_error());
    }
    $sql="CREATE TABLE Details(
        id INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(30) NOT NULL,
        Address VARCHAR(30) NOT NULL,
        Salary INT(10) NOT NULL
    )";
     if (mysqli_query($conn,$sql)){
        echo "details table created successfully";
    }
    $sql="INSERT INTO Details(Name,Address,Salary)
    VALUES('Martin Blank','25, Rue LauristonParis',8000)";
    if(mysqli_query($conn,$sql)){

        echo "New record inserted successfully";
        }
        else{
            echo "Error:" . $sql ."<br>".mysqli_error($conn);
        }
    mysqli_close($conn);
?>