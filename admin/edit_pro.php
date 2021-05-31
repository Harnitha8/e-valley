<!DOCTYPE>
<?php
include("includes/db.php");
if(isset($_GET['edit_pro'])) {
    $get_id=$_GET['edit_pro'];
    $get_pro="select * from products where p_id='$get_id'";
    $run_pro = mysqli_query($con, $get_pro);

    $i=0;
    $row_pro = mysqli_fetch_array($run_pro);
    
       
         $pro_id=$row_pro['p_id'];
         $pro_title = $row_pro['p_title'];
         $pro_image = $row_pro['p_image'];
         $pro_price = $row_pro['p_price'];
         $pro_desc = $row_pro['p_desc'];
         $pro_keywords = $row_pro['p_keywords'];
         $pro_cat = $row_pro['p_cat'];
         $pro_gender = $row_pro['p_gender'];
          
    
          $get_cat="select * from categories where cat_id='$pro_cat'";
          $run_cat=mysqli_query($con,$get_cat);
          $row_cat=mysqli_fetch_array($run_cat);
         
          $cat_title=$row_cat['cat_name'];

}
?>
<html>
    <head>
        <title>Update Products</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body >
    <form action="" method="post" enctype="multipart/form-data">
        <table class="table"  border="2">
            <tr align="center">
                <td colspan="7"><h2>Edit & Update Product</h2></td>
            </tr>
            <tr>
                <td align="right" size="80" >Product Title</td>
                <td><input type="text" name="product_title" value="<?php echo $pro_title;?>"/></td>
            </tr>
            <tr>
                <td align="right"  >Product Category</td>
                <td>
                    <select name="product_cat">
                        <?php         
                        $get_cats = "select * from categories";
                        $run_cats = mysqli_query($con, $get_cats);
                    
                        while ($row_cats = mysqli_fetch_array($run_cats)) {
                            $cat_id = $row_cats['cat_id'];
                            $cat_title = $row_cats['cat_name'];
                    
                            if($pro_cat!=$cat_id)
                            {
                                echo "<option value='$cat_id'>$cat_title</option>";
                            }
                            else
                            {
                                echo "<option value='$cat_id' selected>$cat_title</option>";
                            }
                            
                        }
                        ?>

            
                    </select> 
                </td>
                
            </tr>
            <tr>
                <td align="right">Product Gender</td>  
                <td>
                    <input type="radio" name="product_gender" value="female" <?php if($pro_gender=="female") echo "checked"?>/>Female 
                    <input type="radio" name="product_gender" value="male" <?php if($pro_gender=="male") echo "checked"?>/> Male 
                    <input type="radio" name="product_gender" value="none" <?php if($pro_gender=="none") echo "checked"?>/>None
                </td>

            </tr>
            <tr>
                <td align="right">Product Image</td>
                <td><input type="file" name="product_image" value="product_images/<?php echo $pro_image; ?>" /><img src="product_images/<?php echo $pro_image;?>"width='60' height='60'/>
                </td>
            </tr>
            <tr>
                 <td align="right">Product Price</td> 
                <td><input type="text" name="product_price" value="<?php echo $pro_price; ?>" /></td>
            </tr>
            <tr>
                <td align="right" >Product Description</td>
                <td><textarea name="product_desc" cols="40" rows="10">
                <?php echo $pro_desc; ?></textarea></td>

            </tr>
            <tr>
                <td align="right" size="80"  >Product Keywords</td>
                <td><input type="text" name="product_keywords" value="<?php echo $pro_keywords;?>" /></td>
            </tr>
            <tr align=center >
                <td colspan="7"><input type="submit" class="btn" name="update_product" value="Upadate Product" /></td>
            </tr>
        </form>
    </body>
</html>

        <?php
        if(isset($_POST['update_product'])) {
    
            $update_id=$pro_id;

            $product_title= $_POST['product_title'];
            $product_cat= $_POST['product_cat'];
            $product_gender= $_POST['product_gender'];
            $product_price= $_POST['product_price'];
            $product_desc= $_POST['product_desc'];
            $product_keywords= $_POST['product_keywords'];    
        
            if($_FILES['product_image']['name'])
            {
            $product_image=$_FILES['product_image']['name'];
            $product_image_tmp=$_FILES['product_image']['tmp_name'];

            move_uploaded_file( $product_image_tmp,"product_images/$product_image");

            $update_product= "UPDATE products set p_cat='$product_cat',p_gender='$product_gender',
            p_title='$product_title',p_price='$product_price',p_desc='$product_desc',
            p_keywords='$product_keywords',p_image='$product_image' where p_id='$update_id'";
            }
            else
            {
                $update_product= "UPDATE products set p_cat='$product_cat',p_gender='$product_gender',
                p_title='$product_title',p_price='$product_price',p_desc='$product_desc',
                p_keywords='$product_keywords' where p_id='$update_id'";
            }

            $run_product= mysqli_query($con,$update_product);
            
            if($run_product) {
                echo "<script> alert('product has been updated!!') </script>";
                echo "<script>window.open('admn.php?view_products','_self')</script>";
            }
        }
    
        ?> 

        