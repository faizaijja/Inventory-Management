
<html>
    <head>
        <style>
            form{
            margin-top:20px;
            padding:20px 20px;
            border:1px solid;
            width:25%;
            margin-left:400px;
            background-color:#DAF7A6;
            
          }
          h2{
            background-color:black;
            color:white;
            width:30%;
            margin-top:10px;
            margin-left:400px;
            text-align:center;
            
          }
        </style>

    </head>
</html>
<?php

include("connect.php");

$id = $_GET['id']; // Get the customer ID from the URL

$sql = "SELECT * FROM orders WHERE id = $id"; // Select the customer data
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the customer data
    $row = $result->fetch_assoc();

    $amount=$row['purch_amt'];
    $date=$row['ord_date'];
    $customer_id=$row['customer_id'];
    $salesman_id=$row['salesman_id'];

        echo "<h2>Update Customer</h2>";
    echo "<form action='' method='POST'>";

    echo "<label for='purch_amt'>Purchase amount:</label><br>";
    echo "<input type='number' name='customer_name' value='$amount' required><br>";

    echo "<label for='ord_date'>Order_date:</label><br>";
    echo "<input type='text' name='city' value='$date' required><br>";

    echo "<label for='customer_id'>Customer_id:</label><br>";
    echo "<input type='number' name='customer_id' value='$customer_id' required><br>";

    echo "<label for='salesman_id'>Salesman ID:</label><br>";
    echo "<input type='number' name='salesman_id' value='$salesman_id' required><br>";

    echo "<input type='hidden' name='customer_id' value='$id'>";
    echo "<br><button type='submit' name='update'>Update</button>";
    echo "</form>";
    
    

} else{
    echo "customer not found";
}

if(isset($_POST['update'])){
    $amount=$_POST['purch_amt'];
    $date=$_POST['ord_date'];
    $customer_id=$_POST['customer_id'];
    $salesman_id=$_POST['salesman_id'];

    $update="UPDATE `orders` SET `purch_amt`='$amount',`ord_date`='$date',`customer_id`='$customer_id',`salesman_id`='$salesman_id' WHERE id='$id'";
    $query = mysqli_query($conn,$update);
    if($query){
        
    }
    else{
        echo "Failed to update the record!";
    }
}


    // Display a form to update the customer data
    

$conn->close();

?>




