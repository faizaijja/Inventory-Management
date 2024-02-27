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

$sql = "SELECT * FROM customer WHERE id = $id"; // Select the customer data
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the customer data
    $row = $result->fetch_assoc();

    $cname= $row['cust_name'];
    $city = $row['city'];
    $grade = $row['grade'];
    $sman_id = $row['salesman_id'];

        echo "<h2>Update Customer</h2>";
    echo "<form action='' method='POST'>";

    echo "<label for='cust_name'>Customer Name:</label><br>";
    echo "<input type='text' name='customer_name' value='$cname' required><br>";

    echo "<label for='city'>City:</label><br>";
    echo "<input type='text' name='city' value='$city' required><br>";

    echo "<label for='grade'>Grade:</label><br>";
    echo "<input type='text' name='grade' value='$grade' required><br>";

    echo "<label for='salesman_id'>Salesman ID:</label><br>";
    echo "<input type='number' name='salesman_id' value='$sman_id' required><br>";

    echo "<input type='hidden' name='customer_id' value='$id'>";
    echo "<br><button type='submit' name='update'>Update</button>";
    echo "</form>";
    
    

} else{
    echo "customer not found";
}

if(isset($_POST['update'])){
    $cname= $_POST['customer_name'];
    $city = $_POST['city'];
    $grade = $_POST['grade'];
    $sman_id = $_POST['salesman_id'];

    $update="UPDATE `customer` SET `cust_name`='$cname',`city`='$city',`grade`='$grade',`salesman_id`='$sman_id' WHERE id=$id";
    $query = mysqli_query($conn,$update);
    if($query){
        header("Location: customers.php");
    }
    else{
        echo "Failed to update the record!";
    }
}


    // Display a form to update the customer data
    

$conn->close();

?>




