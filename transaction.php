<?php 
        session_start();
        
 ?>       
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transaction</title>
        <style type="text/css">
            body{
                background-color: #f2f2f2;
            }
            table{
                border-collapse: collapse;
                width:100%;
                color:#DC143C;
                font-family: "Times New Roman", Times, serif;;
                font-size: 25px;
                text-align:left;
                margin-top: 1190px;
                
                
            }
            th{
                background-color: #d96459;
                color:white;
                padding-top: 80px;
                
            }
            tr:nth-child(even){
                background-color: #f2f2f2;
               
            }
            tr:nth-child(odd)
            {
                background-color: #4682B4;
            }
        </style>
        
        <link href="styles1.css" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
     <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="index.php">credit</a><br>
                    <img src="images\logo.png" alt="error" alignment="left" height="50 px" width="130 px"></div>
                
                                
                    <div class="collapse navbar-collapse" id="myNavbar"> 
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href = "homepage.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-home"></span> <i><centre><b>Home</b></centre></i></button> </a></li>
               
                            <li><a href = "user.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-user"></span><i><centre><b> Users</b></centre></i></button></a></li> 
                            <li><a href = "transaction.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-transfer"></span> <i><centre><b>Transaction</b></centre></i></button></a></li> 
                        </ul>    
                    </div>
            </div>
        </div>      
        
        
     
        
<?php
include("connection.php");
error_reporting(0);
        
   
            
$query="select * from transaction";
$data = mysqli_query($con, $query);
$result = mysqli_num_rows($data);
//echo $result;
//$results = mysqli_fetch_assoc($data);
//echo $results['id'];
 
       
        

if($result != 0)
{
    ?>
     
       
         <table class="table table-striped table-bordered text-center">
             <form method="post"> 
        <tr>
            <th>Id</th>
            <th>Sender Name</th>
            <th>Receiver Name</th>
            <th>Credit Amount</th>
            
            
        </tr>
    
<?php

    while($results = mysqli_fetch_assoc($data))
    {
?>        
       
        
            <tr>
                <td><?php echo $results['id'] ?></td>
            <td><?php echo $results['sender'] ?></td>
            <td><?php echo $results['receiver'] ?></td>
            <td><?php echo $results['credit amount'] ?></td>
          
           </tr>
 <?php          
    }
}
 else {
     echo"no record found";
}

 
?>
 
    </form>          
    </table>
        
   <?php
        $_SESSION['username']=$_POST['name'];
 ?> 
        
    </body>
</html>