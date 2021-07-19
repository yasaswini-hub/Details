<?php 
    $name=$_POST['name'];
    $Address=$_POST['Address'];
    $Salary=$_POST['Salary'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="place";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
else{
    $ins=$conn->prepare("INSERT INTO Details(Name,Address,Salary)
    VALUES(?,?,?)");
    $ins->bind_param("ssi",$name,$Address,$Salary);
    $ins->execute();
    $ins->close();
    $conn->close();
    if(isset($_POST["submit2"]))
    {
        header('Location:db.php');
    }
}
?> 