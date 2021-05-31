<?php
    include("includes/db.php");
    
        if(isset($_GET['delete_customer'])) {

            $delete_id = $_GET['delete_customer'];
            $delete_customer =  "DELETE from users where userid='$delete_id'";
           
            $run_delete = mysqli_query($con,$delete_customer);

            if($run_delete) {
                echo "<script>alert('a customer has beeen deleted!!')</script>";
                echo "<script>window.open('admn.php?view_customers','_self')</script>";
            }
        }

?>