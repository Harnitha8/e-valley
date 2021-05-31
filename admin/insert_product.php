<!DOCTYPE>
<?php include("includes/db.php"); ?>
<html>
    <head>
        <title>Insering Products</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table class="table" align="center" border="2" cellspacing="2" cellpadding="2">
            <tr align="center">
                <td colspan="7"><h2>Insert New Product</h2></td>
            </tr>
            <tr>
                <td align="right" name="p_title">Product Title:</td>
                <td><input type="text" name="p_title" required/></td>
            </tr>
            <tr>
                <td align="right">Product Category:</td>
                <td>
                    <select name="p_cat" required>
                            <option value="" disabled selected>Select your option</option>
                            <?php
                                $sql= "select * from categories";

                                $res=mysqli_query($con, $sql) OR die("cannot retrieve categories");
                            
                                $count = mysqli_num_rows($res) OR die("no records");
                            
                                if($count>0)
                                {
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $id=$row['cat_id'];
                                        $name=$row['cat_name'];
                                        echo "<option value='$id'>$name</option>";
                                    }
                                }
                            ?>
                    </select> 
                </td>
                
            </tr>
            <tr>
                <td align="right" name="p_gender">Product Gender</td>
                <td>
                    <input type="radio" name="p_gender" value="female" required/>Female 
                    <input type="radio" name="p_gender" value="male" required/> Male 
                    <input type="radio" name="p_gender" value="none"required/>None
                </td>
            </tr>
            <tr>
                <td align="right" name="p_image">Product Image:</td>
                <td><input type="file" name="p_image" required/></td>
            </tr>
            <tr>
                <td align="right" name="p_price">Product Price:</td>
                <td><input type="text" name="p_price" required/></td>
            </tr>
            <tr>
                <td align="right" name="p_desc">Product Description:</td>
                <td><textarea name="p_desc" cols="40" rows="10"></textarea></td>
            </tr>
            <tr>
                <td align="right" name="p_keywords">Product Keywords:</td>
                <td><input type="text" name="p_keywords" required/></td>
            </tr>
            <tr align="center" >
                <td colspan="7"><input type="submit" class="btn" name="insert_post" value="Insert Product Now" /></td>
            </tr>
         </table>
    </form>
</body>
</html>
<?php
        if(isset($_POST['insert_post'])){
            $p_title=$_POST['p_title'];
            $p_cat=$_POST['p_cat'];
            $p_gender=$_POST['p_gender'];
            $p_price=$_POST['p_price'];
            $p_desc=$_POST['p_desc'];
            $p_keywords=$_POST['p_keywords'];


            $p_image=$_FILES['p_image']['name'];
            $product_image_tmp=$_FILES['p_image']['tmp_name'];

            move_uploaded_file($product_image_tmp,"product_images/$p_image");

            $insert_product="insert into products(p_cat,p_title,p_gender,p_price,p_desc,p_image,p_keywords) values ('$p_cat','$p_title','$p_gender','$p_price','$p_desc','$p_image','$p_keywords')";
             
            $insert_pro =mysqli_query($con, $insert_product);

            if($insert_pro){
                echo "<script>alert('Inserted successfully')</script>";
                echo "<script>window.open('admn.php?insert_product','_self')</script>";
            }
        }
?>
