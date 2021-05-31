<link rel="stylesheet" href="view_products.css">
<table width="795" align="center" bgcolor="meroon" class="table">
        <tr align="center">
        <td colspan="6"><h2>View All Customers Here...!!</h2></td>
         </tr>

    <tr align="center" bgcolor="red">
            <th>Serial Num</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pasword</th>
            <th>Delete</th>
    </tr>

    <?php
    include("includes/db.php");
    $get_customer = "select * from users";
    $run_customer = mysqli_query($con, $get_customer);

    $i=0;
    while($row_customer = mysqli_fetch_array($run_customer)) {
       
        $customer_userid=$row_customer['user_id'];
        $customer_emailid = $row_customer['email'];
        $customer_password = $row_customer['password'];
    
        // $pro_Edit = $row_pro['product_edit'];
        // $pro_Delete = $row_pro['product_delete'];
        $i++;
    
    ?>
                
            <tr align="center">
              <td class="td"><?php echo $i;?></td>
              <td><?php echo $customer_userid ;?></td>
              <td><?php echo   $customer_emailid;?></td>
              <td><?php echo   $customer_password; ?></td> 
              <td><a href='delete_customer.php?delete_customer=<?php echo $customer_userid; ?>'>DELETE<a></td>

            </tr>

        <?php } ?>
</table>
