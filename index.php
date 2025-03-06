
<html>
    <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>SUPERMARKET</title>

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
        body{
            overflow-x:hidden;
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
        a:active{
            color:white;
        }
        li a:hover{
            background-color:#DAF7A6;
        }

          
         .back-image img{
            background-image:url('pexels-jane-doan-1132047.jpg');
            width:1250px;
            height:800px;
            margin-top:5px;
            background-size:contain;
            background-repeat:no-repeat;
            position:relative;
            opacity:0.5;
          }

          .image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top:70%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.back-image:hover .image {
  opacity: 0.3;
}

.back-image:hover .middle {
  opacity: 1;
}

 .text {
  background-color: pink;
  color: white;
  font-size: 36px;
  font-weight:bold;
  padding: 16px 32px;
  
}
   .lower{
    background-color:black;
    margin-top:8px;
    height:80px;

    }
  

       </style>
    </head>

    <body>
        <div class="nav-container">
        
            <h3>FRUIT STORE INVENTORY MANAGEMENT SYSTEM</h3>
            <div class="nav-bar">
                <ul>
                    <li><a href="supermarket.php" target="_blank">Home</a></li>
                    <li><a href="customers.php" target="_blank">Customer</a></li>
                    <li><a href="CustomerReport.php" target="_blank">CustomerReport</a></li>
                    <li><a href="salesman.php" target="_blank">Salesman</a></li>
                    <li><a href="purchases.php" target="_blank">Purchases</a></li>
                    <li><a href="Date.php" target="_blank">DateReport</a></li>
                    <li><a href="Login.php" target="_blank">Logout</a></li>
                </ul>

            </div>

        </div>

        <div class="back-image">
            <img src="pexels-jane-doan-1132047.jpg" alt="">
            <div class="middle">
            <div class="text">WELCOME TO THE FRUIT STORE!</div>

            </div>
           
        <div class="welcome">
        

        </div>

        </div>
        

        <div class="lower">
          <footer>
            <p style="color:white; font-size:20px; text-align:center; padding:30px;">@Fruit Store Inventory Management System</p>

          </footer>
        </div>
        
        

    </body>
</html>
