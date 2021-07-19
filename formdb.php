
<?php 
    if(isset($_POST["submit2"]))
    {
        header('Location:db.php');
    }
?>
<html>
    <head>
        <title>Task</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
        <style>
            .body{
                background: linear-gradient(to bottom, #66ccff 0%, #ff9999 100%);;
            }
            .div1{
                width:500px;
                height:450px;
                background: linear-gradient(to bottom, #cc99ff 0%, #ff6600 100%);
                margin-top:90px;
                margin-left:370px;
                border-radius:20px;
                position:static;
            }
            .name{
                position:absolute;
                font-size:22px;
                color:green;
                margin-top:76px;
                margin-left:65px;
                font-family:"Georgia",serif;
            }
            .tena{
                position:absolute;
                height:30px;
                width:350px;
               margin-top:105px;
                margin-left:65px;
                border:1px solid white;
                border-radius:13px;
                border:none;
            }
            .address{
                position:absolute;
                font-size:22px;
                color:green;
                margin-top:161px;
                margin-left:65px;
                font-family:"Georgia",serif;
            }
            .tead{
                position:absolute;
                height:30px;
                width:350px;
                margin-top:190px;
                margin-left:65px;
                border:1px solid white;
                border-radius:13px;
            }
            .salary{
                position:absolute;
                font-size:22px;
                color:green;
                margin-top:241px;
                margin-left:65px;
                font-family:"Georgia",serif;
            }
            
            .nusa{
                height:30px;
                width:350px;
                position:absolute;
                margin-top:270px;
                margin-left:65px;
                border:1px solid white;
                border-radius:13px;
            }
            .6{
                margin-top:130px;
            }
            .su{
                margin-top:1px;
            }
            .sub{
                position:absolute;
                width:170px;
                height:35px;
                margin-left:155px;
                margin-top:360px;
                border:1px solid #ff6600;
                border-radius:15px;
                font-size:22px;
                font-family:"Georgia",serif;
                color:#9933ff;
            }
        </style>
    </head>
    <body class="body">
        <div class="div1">
            <form name="form" action="config.php" method="post">
            <label class="name">NAME</label>
            <div class="2"><input type="text" name="name" placeholder="NAME" class="tena"></div>

            <label class="address">ADDRESS</label>
            <div class="3"><input type="text" name="Address" placeholder="ADDRESS" class="tead"></div>
            <div class="6">
            <label class="salary">SALARY</label>
            <div class="4"><input type="number" name="Salary" placeholder="SALARY" class="nusa"></div>
            </div>
            <div class="su"><input type="submit" name="submit2" value="SUBMIT" class="sub"><div>
            </form>
        </div>
    </body>
</html>