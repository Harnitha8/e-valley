<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something is posted
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $contact_number=$_POST['contact_number'];
        $address=$_POST['address'];
        $password = $_POST['password'];


        $email = stripcslashes($email);  
        $email = mysqli_real_escape_string($con, $email);   
          
        $sql = "select * from users where email = '$email'";  
        echo $sql;
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
              
        if($count == 1){  
            echo 'Account already exists'; 
        }  


        else{
            if(!empty($first_name) && !empty($password) & !is_numeric($first_name))
        {
            $user_id = random_num(8);
            $query = "insert into users (user_id,first_name,last_name,gender,email,contact_number,address,password) values ('$user_id','$first_name','$last_name','$gender','$email','$contact_number','$address','$password')";
            echo $query;
            if(mysqli_query($con,$query))
            {
                header("Location: login.php");
                die;
            }
            else
            {
                echo 'error in insering values';
            }
        }
        else
        {
            echo 'please enter valid UserName and Password';
        }

    }
        }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evalley signup</title>
    <link rel="stylesheet" href = "signup.css">
</head>
<body>
    <div class="signup">
            <div class="mainform"><form method = "POST">
            <h2>Register</h2>
            <input class= "c1" type="text" placeholder="First Name" name="first_name" required><br><br>
            <input class= "c1" type="text" placeholder="Last Name" name="last_name" required><br><br>
            <div class="g1">Gender</div>
            <input id = "rd1" name = "gender" type="radio" value = "male" required>Male</input><br>
            <input id = "rd2" name = "gender" type = "radio" value = "female" required>Female</input><br>
            <input class= "c1" id="c3" type="email" placeholder="Email" name="email" required><br><br>
            <input class= "c1" type="text" placeholder="contact number" name="contact_number" required><br><br>
            <input class= "c1" type="text" placeholder="address" name="address" required><br><br>
            <input class= "c1" type="password" placeholder="password" name="password" required><br><br>
            <button id="button">submit</button><br><br><br><br>
        </form></div>
        

    </div>
    <div class="img"><img src="registration1.jpg" ></div>
</body>
</html>