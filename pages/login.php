<!DOCTYPE html>




<html>
    <head>
        <meta charset="UTF-8">
        <title>Buy it</title>
        <script src="../lib/jquery.min.js" type="text/javascript"></script>
        <link href="../css/style1.css" rel="stylesheet" type="text/css"/>
        <script src="../lib/jquery.slides.min.js" type="text/javascript"></script>
        <script src="../js/script1.js" type="text/javascript"></script>
<style>
            input[type=text]{
                width: 60%;
                padding: 10px;
                margin: 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;

            }


            input[type=password]{
                width: 60%;
                padding: 10px;
                margin: 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;

            }
            input[type=submit]{
                width: 40%;
                background-color: #68cb6c;
                font-weight: bold;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=text]:focus{
                border: 1px solid green;
            }

            input[type=password]:focus{
                border: 1px solid green;
            }
            input[type=submit]:hover{
                background-color: #346636;
            }

        </style>


    </head>
    <body>

        <div class="navigation_main clear">
            <div class="navigation clear">
            <ul>
                <li><a href="../index.php" class="main">OnlineShopping.com</a></li>
                <li><input type="text" name="searchBox"/><input type="button" name="search" value="Search"/></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">About</a></li>
            </ul>
            </div>
            <div class="navigation_sec clear">
                <ul>
                <li><a href="login.php">Sing In</a></li>

                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Need Help?</a></li>
                </ul>
            </div>
        </div>

        <div class="body_main clear">
            <div class="body_sub clear">





                <div class="container login clear">
                    <form action="login.php" method="post">
                        <h1>Customers Login</h1>
                        <hr>

                        <label>User Name :</label><br>
                        <input type="text" name="userName"/><br>


                        <label>Password:</label><br>
                        <input type="password" name="password"/><br>

                        <input type="submit" name="submit" value="Log In"/><br>



                    </form>
                    <p id="msg">

                        </p>
                </div>




                </div>
            </div>


        <?php
    include 'database_connection.php';

    if(isset($_POST['submit'])){
        $userName=$_POST['userName'];
        $password=$_POST['password'];

        $query="select * from customers where userName ='$userName'";
        $result= mysqli_query($connection, $query);

        if(!$result){
            die("Qurey Error".mysqli_error());
        }
        $row= mysqli_fetch_assoc($result);

        if($password!=""){
            if($password==$row['password']){
                echo 'successfully log In';
                header("Location: http://localhost/Varsity_project/index.php");
            }
            else{
                echo '<script>document.getElementById("msg").innerHTML="Error";</script>';
            }
        }else{
                echo '<script>document.getElementById("msg").innerHTML="Error";</script>';
            }

    }
    mysqli_close($connection);
?>


        <div class="footer"></div>
        </div>



        <?php
        // put your code here
        ?>
    </body>
</html>
