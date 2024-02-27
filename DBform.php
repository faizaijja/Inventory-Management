<html>
    <head>
        <title></title>
        <style>
            body{
                background:linear-gradient(to left top, #cc2b5e, #753a88);
            }

            .design{
                width:50%;
                margin-top:3%;
                margin-left:5%;
                padding:5%;
                box-shadow:8px 8px 8px 8px white;
                border-radius: 5%;
                background-color:beige;
            }

            h4{
                text-align:center;
            }
            #hey{
                margin-top:80%;
                margin-left:55%;
                background:pink;
                color:black;
                font-weight:bold;
                border-radius:5px;
            }
            .enter{
                width:300px;
                height:40px;
                border-radius:10px;
            }
        </style>
    </head>

    <body>
        <div class="design">
            <table>
            <h4>CLIENT INFO</h4>
            <form action="" method="POST">
             <tr>
                <td><label for="id"><b>First name:<b></label></td>
                <td><input type="text" name="fname" id="" class="enter" required="required"></td>
             </tr>   
            

             <tr>
                <td><label for="id"><b>Last name:<b></label></td>
                <td><input type="text" name="lname" id="" class="enter" required="required"></td>
             </tr>
           
        
  
             <tr>
             <td><input type="submit" name="submit" value="SUBMIT" id="hey"></td>

             </tr>
    

            </form>

            </table>
            

        </div>

        <?php

        include("connect.php");
        if(isset($_POST['submit'])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];

        $insert="INSERT INTO client (fname,lname) VALUES ('$fname', '$lname')";
        $sql = mysqli_query($conn,$insert);

        if($sql){
            echo "<script>alert('Customer created')</script> ";
        }
        else {
            echo "<br>Customer not created";
        }

        }
        


        ?>
    </body>
</html>