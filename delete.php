
<html>
    <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>PURCHASES</title>

        <!----------style section------------->
       <style>


        .nav-container{
    width:100%;
    background-color: #b2beb5;
    margin-top:2%;
    box-shadow:10px 10px 10px 10px grey;
    
  }

       h3{
    width:95%;
    color:white;
    font-size:30px;
    text-align:center;
    background-color:black;
    border-radius:25px 25px 25px 25px;
    padding:2%;
    margin-left:5px;
    
        }

          .nav-bar{
            margin-left:250px;
          }

        ul {
            list-style-type: none;
            margin:0;
            padding:0;
             
        }
        li a{
            color:black;
            padding: 16px;
            font-size:25px;
            text-decoration-line:none;
           
           
        }
        li{
            display:inline-block;
            text-align:center;
            
            
        }
        li a:active{
            background-color:white;
        }
        li a:hover{
            background-color:#b2beb5;
        }
          

          .purchases{
            padding:30px 20px 20px 20px;
            padding-left:50px;
            width:30%;
            height:30%;
            background-color:#b2beb5;
            border-radius:5px 5px 5px 5px;
            margin-top:10%;
            margin-left:2%;
            float:left;
            position:relative;
          }
        
          .purchase-container{
            width:30%;
            height:30%;
            margin-top:10%;
            margin-left:40%;
            position:absolute;
        
          }
          tr:nth-child(even){
            background-color:#f2f2f2;

          }

       </style>
    </head>

    <body>
        <div class="nav-container">
            <h3>CLOUD SUPERMARKET INVENTORY MANAGEMENT</h3>
            <div class="nav-bar">
                <ul>
                <li><a href="supermarket.php">Home</a></li>
                    <li><a href="customers.php">Customer</a></li>
                    <li><a href="CustomerReport.php">CustomerReport</a></li>
                    <li><a href="salesman.php">Salesman</a></li>
                    <li><a href="purchases.php">Purchases</a></li>
                    <li><a href="Date.php">DateReport</a></li>
                    <li><a href="Login.php">Logout</a></li>
                </ul>

            </div>

        </div>

         <!-------------Purchase form------------->
         <div class="purchases">
            <form action="" method="POST">
                <label for="">Purchase amount</label>
                <input type="number"name="amount" value="" required="required"><br>

                <br><label for="">Purchase date</label>
                <input type="date"name="date" value="" required="required"><br>

                <br><label for="">Customer id</label>
                <input type="number"name="cid" value="" required="required"><br>


                <br><label for="">Salesman id</label>
                <input type="number"name="sid" value="" required="required"><br>



                <br><button type="submit" style="margin-left:30%;" name="add">DELETE</button>
                
            </form>

        </div>

        


        <!-------------PurchasesDB-------------->
        <<?php
include('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete="DELETE FROM `purchases` WHERE id='$id'";
    $sql=mysqli_query($conn,$delete);
    if($sql){
        header("location:purchases.php");
    }
    else{
        echo"<script>alert('deleting failed')</script>";
    }
}



?>
    </body>
</html>




