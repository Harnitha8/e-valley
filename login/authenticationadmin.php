<?php
    include("connection.php");
    $username = $_POST['admin_name'];  
    $password = $_POST['admin_password'];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select * from admin where email = '$username' and password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location:../admin/admn.php");
                die; 
            }  
            else{  
                echo "<script>alert('Login failed. Invalid username or password.')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }     
?>