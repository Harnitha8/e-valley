<?php

    function check_login($con){
        echo 'in function check_login';
        if(isset($_SESSION['user_id']))
        {
            $id = $_SESSION['user_id'];
            $query = "select * from users where user_id= '$id' limit 1";
            $result = mysqli_query($con,$query);
            if($result && mysql_num_rows($result) > 0 )
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        else{
            //redirect to check_login
            header("Location: login.php");
            die;
        }
    }


    function random_num($length)
    {
        $text = "";
        if($length < 5)
        {
            $length = 5;
        }
        $len = rand(4, $length);
        for($i=0; $i<$len; $i++)
        {
            $text .= rand(0,5);
        }

        return $text;

    }