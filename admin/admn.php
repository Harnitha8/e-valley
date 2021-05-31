<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admnstyle.css">
    <title>ADMIN PANEL</title>
</head>
<body> 
        <div class="top">
           <h1>WELCOME ADMIN!!!!</h1>
        </div>
        <div class="bottom">
            <h2 style="text-align:center">Manage Content</h2>
                <div class="changes">
                    <a href="admn.php?insert_product">Insert New Product</a>
                    <a href="admn.php?view_products">View All Products</a>
                    <a href="admn.php?view_cats">View All Categories</a>
                    <a href="admn.php?view_customers">View Customers</a>
                    <a href="admn.php?view_orders">View Orders</a>
                    <a href="admn.php?view_payments">View Payments</a>
                    <a href="../login/logout.php?logout">Admin Logout</a>
                </div>  
        
            <?php
            if(isset($_GET['insert_product'])) {
                include("insert_product.php");
            }

            if(isset($_GET['view_products'])) {
                include("view_products.php");
            }

            if(isset($_GET['edit_pro'])) {
                include("edit_pro.php");
            }

            if(isset($_GET['view_cats'])) {
                include("view_cats.php");
            }

            if(isset($_GET['edit_cat'])) {
                include("edit_cat.php");
            }
            if(isset($_GET['view_customers'])) {
                include("view_customers.php");
            }
            if(isset($_GET['logout'])){
                include("../login/logout.php");
            }
            ?>
        </div>
    </div>
</body>
</html>