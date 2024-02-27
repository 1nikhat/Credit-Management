
<?php
session_start();
//error_reporting(0)
//=$_POST['username'];
$_SESSION['username']=$_POST['username'];
//echo $var;
?>

        
     
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transfer</title>
        <style type="text/css">
            
            
            .container-fluid{
               background-size: cover;
              background-image: url("images/images9.jpg");
              padding: 150px 200px 100px 900px;
             
            }
            .container{
                padding-top: 100px;
                padding-bottom: 150px;
            }
            .credit{
               
                margin-bottom: 240px;
            }
            .w3-button{
                width: 150px;
                margin-top: 15px;
            }
            .tr{
                margin-top: 15px;
                padding-top: 14px;
            }
            
           
        </style>
        
        <link href="styles1.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
			     <!--jQuery library--> 
       	
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
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
                    <img src="images\logo.png" alt="error" alignment="left" height="50 px" width="130 px">
                </div>
                
                                
                    <div class="collapse navbar-collapse" id="myNavbar"> 
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href = "homepage.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-home"></span> <i><centre><b>Home</b></centre></i></button> </a></li>
               
                            <li><a href = "user.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-user"></span><i><centre><b> Users</b></centre></i></button></a></li> 
                            <li><a href = "transaction.php" id="fa"><button class="button"><span class = "glyphicon glyphicon-transfer"></span> <i><centre><b>Transaction</b></ccentreenter></i></button></a></li> 
                        </ul>
                        
                    
                    </div>
            </div>
        </div> 
        
         <?php
                include("connection.php");
                error_reporting(0);
                $query="select * from user where name!='$var'";
                $data = mysqli_query($con, $query);
                $result = mysqli_num_rows($data);
               $query1="select credit from user where name ='{$_SESSION['username']}'";
               $data1=  mysqli_query($con, $query1);
               $data2=mysqli_query($con, $query);
       ?>
        
        <?php
        
             if(isset($_REQUEST["submit"]))
                {
                  
                 
                     $rcv_name=$_REQUEST["slct"];
                     $rcv_crdt=$_REQUEST["credit"];
                     $send_crdt=$_REQUEST["crdt"];
                     $sender_name=$_SESSION['username'];
                     //echo $send_crdt;
                     //echo $rcv_crdt;
                     //if(isset($_SESSION['username']))
                    //{
                       if($send_crdt>=$rcv_crdt){
                       
                       mysqli_query($con,"UPDATE `user` SET `credit` = `credit` - '$rcv_crdt' where `name`='$sender_name'");
                         mysqli_query($con,"UPDATE `user` SET `credit`= `credit`+'$rcv_crdt' where `name`='$rcv_name'");
            
                      $res=  mysqli_query($con,"INSERT INTO `transaction`( `sender`, `receiver`, `credit amount`) VALUES ('$sender_name','$rcv_name','$rcv_crdt') ");
                     if($res !=0)
                     {
                         $message = "Transaction Successfully.Thank You!";
                         echo "<script type='text/javascript'>alert('$message');</script>";
                     }
                       
                       } 
              else{
                           $message = "Transaction Unsuccessfull.Please insert correct Amount";
                         echo "<script type='text/javascript'>alert('$message');</script>";
                     }
                             
        }
        
        ?>
        
        
        
        <div class="container-fluid" alt="Something wrong"> 
             <form method="post"> 
                 <input type="hidden" name='username' value=<?php echo $_SESSION['username']; ?> >
                 
                <div class="content1">
                    <centre>
                    <img src="images\user1.png" height="150px" > 
                    <h1> <label name="nm"><centre><?php echo $_SESSION['username'] ?></centre></label></h1>
                    <h1>credit Amount:</h1>
                     <?php
                         while($result2=  mysqli_fetch_assoc($data1))
                          {
                     ?>        
                     <input type="hidden" name='crdt' value=<?php echo $result2['credit']; ?> >       
                     <h1><?php  echo $result2['credit'] ?></h1> 
                     <?php        
                         }
                     ?>
                    
                        <table>
                            
                            
                            <div class="form-group">
                            <tr>
                                <td>
                            <level><b>Send To</b></level>    
                                    <select name="slct">
                                        <option value="">Select Receiver Name</option>
                                         <?php

                                                 while($fin_result = mysqli_fetch_assoc($data))
                                                    {
                                                         // echo $results['name'];
                                        ?> 
                                        <option value="<?php echo $fin_result['name'] ?>"><?php echo $fin_result['name'] ?></option>
                                                     <?php
                                                     }
                                                       ?>
                                    </select>
                                </td>
                            </tr>
                            </div>
                            <br>
                            <div class="form-group">
                                
                            <tr>
                                <td>
                            <lebel><b>Select Credit Amount:</b></lebel>
                                    <input type="text" class="form-control" id="credit" name="credit">
                                </td>
                            </tr>
                            </div>
                            <br>
                            <div class="form-group" >
                                <tr>
                                    <td>
                             
                                        
                                    </td>
                            </tr>
                            </div>
                            
                        </table> 
                     <div class="w3-container" >
                                
                             
                                 <p><button class="w3-button w3-teal" name="submit">Submit</button></p>
                                    
                            
                            </div>
               
                    </form>
                                                    </centre>             
                </div>     
        </div>    
    </body>
</html>    
        
        