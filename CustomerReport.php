
<html>
    <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>CustomerReport</title>

        <!----------style section------------->
       <style>


        .nav-container{
    width:100%;
    background-color: #DAF7A6;
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
            margin-left:150px;
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
            color:white;
        }
        li a:hover{
            background-color:#DAF7A6;
        }
          .welcome{
            margin-top:200px;
          }

          .info-date{
            padding:20px 10px 10px 10px;
            width:30%;
            height:10%;
            background-color:#b2beb5;
            margin-top:10%;
            margin-left: 15%;
            border-radius:20px 20px 20px 20px;
          }

        

       </style>
    </head>

    <body>
        <div class="nav-container">
            <h3>FRUIT STORE INVENTORY MANAGEMENT SYSTEM</h3>
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

        <!-------------Date form------------->
    
    
        <div class="info-date" style="position:fixed;">
       
            <form action="" method="POST">
                
                
                <label for="">CustomerReport</label>
                <input type="text" name="customerselector" value="" required="required"><br>
                
            
                <br><button type="submit" style="margin-left:30%;" name="checkcustomer">CHECK</button>
                
            </form>

        </div>

<!-------------sales container----------->
        <div class="sales-container">

        <div>
            <table>

            </table>
        </div>

        </div>


        <!-------------SalesDB-------------->
        <?php

        include("connect.php");
        if(isset($_POST['checkcustomer'])){
            $customer=$_POST['customerselector'];
          

            $sql = "SELECT * FROM customer WHERE cust_name = '$customer'";
            $result = mysqli_query($conn, $sql);
            
            if (!$result) {
              echo "Error: " . mysqli_error($conn);
            } else {
              
            
              echo "<h2>Customer Report: $customer</h2>";
              echo "<table>";
              echo "<tr><th>No</th><th>Order date</th><th>Customer</th><th>Purchase amount</th><th>salesman</th></tr>";
            
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['cust_name'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['grade'] . "</td>";
                echo "<td>" . $row['salesman_id'] . "</td>";
                echo "</tr>";
              }
            
              echo "</table>";
            }
            }
            mysqli_close($conn);
            ?>
        
        
        

    </body>
</html>