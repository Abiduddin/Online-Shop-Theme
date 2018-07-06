<!DOCTYPE html>




<html>
    <head>
        <meta charset="UTF-8">
        <title>Buy it</title>
        <script src="jquery.min.js" type="text/javascript"></script>
        <link href="style1.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.slides.min.js" type="text/javascript"></script>
        <script src="script1.js" type="text/javascript"></script>


    
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
                <table>
                    <tr>
                    <th><label>First Name: </label></th>
                    <td><input type="text" name="fName" /></td>
                    </tr>
                    <tr>
                    <th><label>Last Name: </label></th>
                    <td><input type="text" name="lName" /></td>
                    </tr>
                    <tr>
                    <th><label>Birthday: </label></th>
                    <td> <input type="date" name="birthday" /></td>
                    </tr>
                    <tr>
                    <th><label>Email: </label></th>
                    <td><input type="text" name="email" /></td>
                    </tr>
                    <tr>
                    <th><label>Gender: </label></th>
                    <td><input type="radio" name="gender" value="Male"/>Male
                        <input type="radio" name="gender" value="Female"/>Female
                    </td>
                    </tr>
                    <tr>
                    <th><label>Phone Number: </label></th>
                    <td><input type="text" name="phoneNumber" /></td>
                    </tr>
                    <tr>
                    <th><label>Address: </label></th>
                    <td><textarea cols="40" rows="5" name="address"></textarea>
                    </td>
                    </tr>
                    <tr>
                    <th><label>Country: </label></th>
                    <td><input type="text" name="country" /></td>
                    </tr>
                    <tr>
                    <th><label>City: </label></th>
                    <td> <input type="text" name="city" /></td>
                    </tr>
                    <tr>
                    <th><label>Post Code: </label></th>
                    <td><input type="number" name="postcode" /></td>
                    </tr>
                    <tr>
                    <th><label>Password: </label></th>
                    <td><input type="password" name="fPassword" /></td>
                    </tr>
                    <tr>
                    <th><label>Retype Password: </label></th>
                    <td><input type="password" name="rPassword" /></td>
                    </tr>
                    <tr>
                    <th></th>
                    <td><input type="submit" value="Sign Up" name="submit"/></td>
                    </tr>               
                </table>
 
        </form>
                </div>
                <?php
include 'database_connection.php';
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
            echo 'Successfully Saved.';
        }
    }
    else{
        echo 'Password Error!!!';
       //header("Location: http://localhost/Varsity_project/login.php");
    }
    
    
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
