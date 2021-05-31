<link rel="stylesheet" href="view_products.css">
<table width="795" align="center" class="table">
        <tr align="center">
        <td colspan="6"><h2>View All Products Here...!!</h2></td>
         </tr>

    <tr align="center" bgcolor="red">
            <th>Serial Num</th>
            <th>Title</th>
            <th>Image</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
    </tr>

    <?php
    include("includes/db.php");
    $get_pro = "select * from products";
    $run_pro = mysqli_query($con, $get_pro);

    $i=0;
    while($row_pro = mysqli_fetch_array($run_pro)) {
       
        $pro_id=$row_pro['p_id'];
        $pro_title = $row_pro['p_title'];
        $pro_image = $row_pro['p_image'];
        $pro_price = $row_pro['p_price'];
        // $pro_Edit = $row_pro['product_edit'];
        // $pro_Delete = $row_pro['product_delete'];
        $i++;

    
    ?>
            <tr align="center">
              <td class="td"><?php echo $i;?></td>
              <td><?php echo $pro_title ;?></td>
              <td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60" /></td>
              <td><?php echo $pro_price;?></td>
               <td><a href="admn.php?edit_pro=<?php echo $pro_id; ?>">EDIT</a></td> 
              <td><a href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>">DELETE<a></td>

            </tr>

        <?php } ?>
</table>
 