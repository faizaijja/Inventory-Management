<?php
include("connect.php");

$id = $_GET['id']; // Get the customer ID from the URL

$sql = "SELECT * FROM customer WHERE id = $id"; // Select the customer data
$query = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
    $cname= $row['cust_name'];
    $city = $row['city'];
    $grade = $row['grade'];
    $sman_id = $row['salesman_id'];

?>
<html>
    <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>CUSTOMERS</title>

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
          .welcome{
            margin-top:200px;
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
                    <li><a href="customers.php">CustomerReport</a></li>
                    <li><a href="salesman.php">Salesman</a></li>
                    <li><a href="purchases.php">Purchases</a></li>
                    <li><a href="Date.php">DateReport</a></li>
                    <li><a href="Login.php">Logout</a></li>
                </ul>

            </div>

        </div>

        <!-------------customers form------------->
        <div class="sales">
            <form action="" method="POST">
                <label for="">Customer Name</label>
                <input type="text"name="customer_name" value="<?php echo $cname;?>" required="required"><br>

                <br><label for="">City</label>
                <input type="text"name="city" value="<?php echo $city;?>" required="required"><br>

                <br><label for="">Grade</label>
                <input type="text"name="grade" value="<?php echo $grade;?>" required="required"><br>

                <br><label for="">Salesman id</label>
                
                <input type="number"name="salesman_id" value="<?php echo $sman_id;?>" required="required"><br>

               

                <br><button type="submit" style="margin-left:30%;" name="add">Add</button>
                
            </form>

        </div>
    </body>
</html>
 <!-------------CustomersDB-------------->
 <?php

include("connect.php");
if(isset($_POST['add'])){
    $cname=$_POST['customer_name'];
    $city=$_POST['city'];
    $grade=$_POST['grade'];
    $sman_id=$_POST['salesman_id'];

$insert="INSERT INTO customer (cust_name,city,grade,salesman_id) values ('$cname', '$city','$grade','$sman_id')";
$sql = mysqli_query($conn,$insert);

if($sql){
    
}
else {
    echo "<br>Customer not created";
}

}

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);
            
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table>";
echo "<tr><th>Customer_Id</th><th>Customer-name</th><th>City</th><th>Grade</th><th>Saleman_Id</th><th>Actions</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['cust_name'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['grade'] . "</td>";
echo "<td>" . $row['salesman_id'] . "</td>";

echo "<td>";
echo "<a href='cupdate.php?id=" . $row['id'] . "'>Update</a>";
echo "<a href='cdelete.php?id=" . $row['id'] . "'>Delete</a>";
echo "</td>";
echo "</tr>";
}

echo "</table>";
} else {
echo "No orders found";
}

$conn->close();
?>


