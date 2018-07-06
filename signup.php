<?php
include 'database_connection.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Buy it</title>
        <script src="jquery.min.js" type="text/javascript"></script>
        <link href="style1.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.slides.min.js" type="text/javascript"></script>
        <script src="script1.js" type="text/javascript"></script>
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
            input[type=date]{
                width: 60%;
                padding: 10px;
                margin: 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                
            }
            input[type=number]{
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
            input[type=number]:focus{
                border: 1px solid green;
            }
            input[type=date]:focus{
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
                <li><a href="index.php" class="main">OnlineShopping.com</a></li>
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
                
                
                
                

                <div class="container signup clear">
                    <form action="signup.php" method="post">

                <h1>Create New Customer Account</h1>
                <hr>
                <br>
                <br>
                
                <label>First Name: </label><br>
                <input type="text" name="fName" placeholder="Your First Name..." /><br>
                    
                    
                    <label>Last Name: </label><br>
                    <input type="text" name="lName" placeholder="Your Last Name..."/><br>
                    
                   
                    <label>Birthday: </label><br>
                    <input type="date" name="birthday" /><br>
                    
                    
                    <label>Email: </label><br>
                    <input type="text" name="email" placeholder="Your Email Address..."/><br>
                    
                    
                    <label>Gender: </label><br><br>
                    <input type="radio" name="gender" value="Male"/>Male
                    <input type="radio" name="gender" value="Female"/>Female<br><br><br>

                    <label>Phone Number: </label><br>
                    <input type="text" name="phoneNumber" /><br>
                    
                    
                    <label>Address: </label><br>
                    <textarea cols="40" rows="5" name="address" placeholder="Your Address..."></textarea><br>

                    <label>Country: </label><br>
                    <input type="text" name="country" placeholder="Your Country Name..." /><br>

                    <label>City: </label><br>
                    <input type="text" name="city" placeholder="Your City Name..." /><br>
                    
                    <label>Post Code: </label><br>
                    <input type="number" name="postcode" /><br>

                    <label>Password: </label><br>
                    <input type="password" name="fPassword" /><br>

                    <label>Retype Password: </label><br>
                    <input type="password" name="rPassword" /><br>
 
                    <input type="submit" value="Sign Up" name="submit"/><br>
 
        </form>
                    <p id="msg">
                        
                    </p>
                </div>
                <?php

if(isset($_POST['submit'])){
    if($_POST['fPassword']==$_POST['rPassword']){
        
        $firstName=$_POST['fName'];
        $lastName=$_POST['lName'];
        $userName=$firstName."_".$lastName;
        $birthday=$_POST['birthday'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $phoneNumber=$_POST['phoneNumber'];
        $address=$_POST['address'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $postcode=$_POST['postcode'];
        $password=$_POST['rPassword'];
        
        //mysqli_real_escape_string($connection,$user);
        
        $query="insert into customers(firstName,lastName,userName,birthday,email,gender,phoneNumber,address,country,city,postcode,password) ";
        $query.="values ('$firstName','$lastName','$userName','$birthday','$email','$gender','$phoneNumber','$address','$country','$city','$postcode','$password')";
        
        $result= mysqli_query($connection, $query);
        
        if(!$result){
            die('Qurey Error!! '.mysqli_error());
        } else {
            echo '<script>document.getElementById("msg").innerHTML="Successfully Saved.";</script>';
        }
    }
    else{
        echo '<script>document.getElementById("msg").innerHTML="Password Error!!!";</script>';
       //header("Location: http://localhost/Varsity_project/login.php");
    }
    
    mysqli_close($connection);
    
    
}


?>
                    
                    

            
                </div>
            </div>
            
        
            
            
        <div class="footer"></div>
        </div>
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
