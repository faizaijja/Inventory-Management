
<html>
    <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>DateReport</title>

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
            background-color:#DAF7A6;
            margin-top:10%;
            margin-left: 15%;
            border-radius:20px 20px 20px 20px;
          }

          table{
            background-color:#b2beb5;
            width:50%;
            margin-top:25px;
            margin-right:2px;
            
          }
        h2{
          margin-left:50%;
          width:30%;
          background-color:#b2beb5;
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
                
                
                <label for="">DATES</label>
                <input type="date" name="dateselector" value="" required="required"><br>
                
            
                <br><button type="submit" style="margin-left:30%;" name="checkdate">CHECK</button>
                
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
        if(isset($_POST['checkdate'])){
          $date=$_POST['dateselector'];
          

            $sql = "SELECT orders.id,orders.ord_date,orders.purch_amt,orders.id,orders.salesman_id ,customer.cust_name FROM orders left outer join customer ON customer.id = orders.id   WHERE ord_date = '$date'";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
              echo "Error: " . mysqli_error($conn);
            } else{
              echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspReport for Date: $date<h2>";
              echo "<table>";

              echo "<tr><th>&nbsp&nbspNo</th><th>&nbsp&nbspOrder date</th><th>&nbsp&nbspCustomer Name</th><th>&nbsp&nbspPurchase amount</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspsalesman</th></tr>";
              while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] .       "</td>";
                echo "<td>" . $row['ord_date'] . "</td>";
                echo "<td>" . $row['cust_name'] . "</td>";
                echo "<td>" . $row['purch_amt'] . "</td>";
                echo "<td>" . $row['salesman_id'] ."</td>";
                echo "</tr>";

                echo "<tr>";

              }
              echo "</table>";
            
            }
           
            
        }
            
            
           

           $conn->close();
            ?>
        
        

    </body>
</html>