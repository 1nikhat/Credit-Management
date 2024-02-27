<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <style type="text/css">
        .img-responsive
            {
              height: 800px;
              width: 1450px;
              background-size: cover;
              background-image: url("images/img3.jpg");
              background-attachment: fixed;
              margin-top: 70px;
              padding-top:100px;             
            }
           
            .content1
            {
               color: white;
                max-width: 1000px;
                padding: 50px 80px;
                margin: 150px 200px 200px 300px;
                
                background-color: rgba(1,1,1,0.7);
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
                    </button> <a class="navbar-brand" href="index.php">Credit</a><br>
                    <img src="images\logo.png" alt="error" alignment="left" height="50 px" width="130 px"></div>
                
                                
                    <div class="collapse navbar-collapse" id="myNavbar"> 
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href = "homepage.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-home"></span> <i><centre><b>Home</b></centre></i></button> </a></li>
               
                            <li><a href = "user.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-user"></span><i><centrer><b> Users</b></centre></i></button></a></li> 
                            <li><a href = "transaction.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-transfer"></span> <i><centre><b>Transaction</b></center></i></button></a></li> 
                        </ul>    
                    </div>
            </div>
        </div>    
                            
            <div class="jumbotron img-responsive  " alt="" >
            
            <div class="container">
                
                
                <div class="content1">
                    
                    <centre>
                        
                <h1>Credit Management</h1>
                <p>Welcome to our Foundation </p>
                <button class="button"><a href="transfer.php">View All Users</a></button>  
                    </centre>
                </div>
                
                
            </div>
            
        </div>
            
            
            

    </body>
</html>
