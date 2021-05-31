<?php

$con = mysqli_connect("localhost","root","","e-valley") OR die("Error1!!");

function getIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
    
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}


//add to cart button functionality
function cart(){
    if(isset($_GET['p_id'])){

        global $con;
        $ip = getIp();
        $product_id = $_GET['p_id'];

        $check_pro = "select * from cart where ip_add = '$ip' AND p_id = '$product_id'";
        $variable='';

        $run_query = mysqli_query($con,$check_pro);
        if(mysqli_num_rows($run_query)>0){
            echo "";
        }
        else{

            $insert_products = "insert into cart (p_id,ip_add) values ('$product_id','$ip')";
            $run_iquery = mysqli_query($con,$insert_products);
           echo" <script> var str=location.pathname;
                    str=str.replace('/e-valley/html/','');
                    $variable = document.write(str)</script>";
            echo "<script>window.open('$variable','_self')</script>";

        }


    }
}


//getting total added items
function total_items(){
    global $con;
    $ip = getIp();

    if(isset($_GET['p_id'])){ 
        $get_items = "select * from cart where ip_add = '$ip'";
        $run_items = mysqli_query($con,$get_items);
        $count_items = mysqli_num_rows($run_items);

    }
    else{
        $get_items = "select * from cart where ip_add = '$ip'";
        $run_items = mysqli_query($con,$get_items);
        $count_items = mysqli_num_rows($run_items);
    }
    echo $count_items;
}

function getCats(){

    global $con;
    $sql= "select * from categories";

    $res=mysqli_query($con, $sql) OR die("Error2!!");

    $count = mysqli_num_rows($res) OR die("Error3!!");

    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $id=$row['cat_id'];
            $name=$row['cat_name'];
            echo $name.'<br>';
        }
    }

}
function getFemaleClothes()
{

    $sql= "select * from products where p_cat='1' and p_gender='female'";

    getItems($sql);
}
function getMaleClothes()
{
    $sql= "select * from products where p_cat='1' and p_gender='male'";
    getItems($sql);
}
function getClothes()
{
    $sql= "select * from products where p_cat='1'";
    getItems($sql);
}
function getFootWear()
{
    $sql= "select * from products where p_cat='2'";
    getItems($sql);
}
function getFemaleFootWear()
{
    $sql= "select * from products where p_cat='2' and p_gender='female'";
    getItems($sql);
}
function getMaleFootWear()
{
    $sql= "select * from products where p_cat='2' and p_gender='male'";
    getItems($sql);
}
function getLaptops()
{
    $sql= "select * from products where p_cat='3'";
    getItems($sql);
}
function getStationary()
{
    $sql= "select * from products where p_cat='4'";
    getItems($sql);
}
function getAccessories()
{
    $sql= "select * from products where p_cat='5'";
    getItems($sql);
}
function getMobiles()
{
    $sql= "select * from products where p_cat='8'";
    getItems($sql);
}
function getFood()
{
    $sql= "select * from products where p_cat='6'";
    getItems($sql);
}
function getLuggage()
{
    $sql= "select * from products where p_cat='7'";
    getItems($sql);
}
function getProducts()
{
    $sql="select * from products";
    getItems($sql);
}
function getSearch($search_query)
{  
    $sql= "select * from products where p_keywords like '%$search_query%' ";
    getItems($sql);
}
function getAll()
{
    $sql= "select * from products";
    getItems($sql);
}
function getItems($sql)
{
    global $con;
    $res=mysqli_query($con, $sql) OR die("Error2!!");
    $count = mysqli_num_rows($res) ;

    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $id=$row['p_id'];
            $title=$row['p_title'];
            $price=$row['p_price'];
            $desc=$row['p_desc'];
            $image=$row['p_image'];
            $keywords=$row['p_keywords'];
            $variable='';
            echo "<div id='single_product'>
                <h3>$title</h3>
                    <img src='../admin/product_images/$image' width='240' height='300'/>
                    <p><b>&#8377 $price</b></p>

                    <br>$desc<br><br>
                    <script> var str=location.pathname;
                    str=str.replace('/e-valley/html/','');
                    $variable = document.write(str)</script>
                <a href='$variable?p_id= $id'><button style='float:center; padding:7px; background:rgb(255, 128, 0);'>&#128722 Add To Cart</button></a>

            </div>";
        }
    }
    else
    {
        echo "<img src='../images/noproducts.jpeg'  width='300' height='500' style='margin-top:30px; margin-bottom:0px;'/> ";
    }
}
    
?>