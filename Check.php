<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            Enter number: <input name="number" value=""><br>
            <input type="submit" name="check" value="CHECK"><br>
        </form>
        <?php
        if(isset($_POST['check'])){
            $num=$_POST['number'];

            if($num>0)
            echo "Number is positive";
    
            else if($num<0)
            echo "Number is negative";
        else if($num==0)
        echo "Origin"; 

        else {
            echo "ENTER NUMBER!!!";
        }

    
        }
        
       
        ?>
    </body>
</html>