<html>
    <head>
        <title>SIGN UP</title>
        <style>
            .sign{
                width:30%;
                height:80%;
                background-color:white;
                box-shadow:15px 15px ;
                border-radius:15px 15px 15px 15px;
                margin-left:400px;
                padding-left:10%;
            }

            h3{
                  width:95%;
                  color:white;
                   font-size:25px;
                  text-align:center;
                  background-color:black;
                  border-radius:25px 25px 25px 25px;
                  padding:2%;
                  margin-left:10px;
                  position:sticky;
   
            }
            
            .uname{
                width:300px;
                height:35px;
                

            }
            .pword{
                width:300px;
                height:35px;
                

            }
            .enter{
                margin-left:100%;
                width:150px;
                height:40px;
                margin-top:20px;
                border-radius:5px 5px 5px 5px;
                border-color:purple;
                font-weight:bold;
            }

            button:hover{
                background-color:whitesmoke;
            }

            .round-image{
                width:20%;
                
            }
            
            
        </style>
    </head>
    <body style="background-image:url('pexels-magda-ehlers-1300975.jpg'); background-size:contain;">
    <div class="navbar-container">

       
            
        
    <h3>FRUIT STORE INVENTORY MANAGEMENT SYSTEM</h3>
   

    </div>
    
                <div class="sign">
                <h1 style="text-align:center; margin-top:5%; margin-right:20%;">SIGN UP</h1>
                <p style="margin-left:5%; color:blue;"><b>Fill the form with the correct information<b></p>
                    <table>
                    
                    <form action="" method="POST" class="tip">

                    <tr>
                     
                
                    <br><label for=""><b>Full name<b></label><br>
                    <br><input type="text" name="fullname" value="" required="required" class="uname"><br>
                    

                   </tr> 

                   <tr>
                     
                
                    <br><label for=""><b>Username<b></label><br>
                    <br><input type="text" name="username" value="" required="required" class="uname"><br>
                    

                   </tr> 

                   
                  
                   <tr>

                      <br><label for=""><b>New Password<b></label><br>
                    
                    <br><input type="password" name="password" value="" required="required" class="pword"><br>
                    
                   </tr>
                  

                   <tr>
                   <td><button type="submit" id="" name="save" class="enter">CREATE ACCOUNT</button>
                  
                </td>
                  
                   </tr>

                   <tr>
                  

                   </tr>
                </form>

                    </table>
                </div>
           
                

        <?php
include("connect.php");
if(isset($_POST['save'])){
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $password=$_POST['password'];

$insert="INSERT INTO signup (`Full name`, `Username`, `Password`) values ('$fullname', '$username', '$password')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo "<script>alert('Account created')</script> ";
    header("location:Login.php");
}
else {
    echo "<br>Account not created";
}

}
    
    ?>
    </body>
</html>