<?php 
if(isset($_POST["submit1"]))
{
    header('Location:formdb.php');
}
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
        <title>TASK</title>
        <style>
            .body{
                background: linear-gradient(to bottom, #9966ff 0%, #ff9966 100%);
               
            }
            .h1{
                margin-top:-70px;
                margin-left:200px;
                font-weight:500;
                position:absolute;
            }
            .add{
                background-color:#00cc00;
                margin-top:-60px;
                margin-left:862px;
                position:absolute;
                height:40px;
                color:white;
                border:1px solid #00cc00;
                border-radius:5px;
            }
            .table{
                background:#cc99ff;
                border-collapse:collapse;
                font-family:"Lucida",Cursive;
                font-size:20px;
                width:65%;
                height:40%;
                text-align:left;
                color:;
                margin-left:200px;
                margin-top:200px;
                position:relative;
            }
            td,th{
                border:1px solid #aaaa;
            }
            th{
                font-size:25px;
                color:#993399;
            }
            td{
                
            }
        </style>
    </head>
    <body class="body">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <h1 class="h1">Employees Details</h1>
    <form class="form" name="formm" action="" method="post">
        <input type="submit" name="submit1" value="+ Add New Employee" class="add">
    </form>
    <table class="table">
        <tr class="tr">
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
        </tr>
    
        <?php 
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="place";
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            if(!$conn){
                die("connection failed: ".mysqli_connect_error());
            }
            $sql="SELECT id,Name,Address,Salary FROM Details";
            $result=$conn->query($sql);
            if($result-> num_rows > 0){
                while($row= $result -> fetch_assoc()){
                    echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Salary"]."</td></tr>";
                }
                echo "</table>";
            }
            $conn->close();
        ?>
    </table>
    </body>
</html>