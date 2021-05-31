<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-valley</title>
    <link rel="icon" href="images/e valley-logos_transparent.png" type="image/icon type">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <?php include 'functions/functions.php'; ?>
</head>
<body>
    <div class="container1" style="height:95vh;">
            <div class="topnav">
                <a href="#home" onMouseOver="this.style.border='0.5px solid white'" onMouseOut="this.style.border='none'">
                    Home
                </a>
                <a href="login/login.php" onMouseOver="this.style.border='0.5px solid white'" onMouseOut="this.style.border='none'">
                    Login</a>
                <a href="html/allproducts.php" onMouseOver="this.style.border='0.5px solid white'" onMouseOut="this.style.border='none'">
                    All products</a>
                <a href="html/about.php" onMouseOver="this.style.border='0.5px solid white'" onMouseOut="this.style.border='none'">
                     About</a>

                <div class="searchbox">
                    <form method="get" action="html/results.php" enctype="multipart/form-data">
                            <input class="input" style="border-radius: 30px;border:none;outline:none;padding:5px;font-size:17px; margin-top:13px;" name="user_query" placeholder="search for products.." type="text"/>
                            <input class="btn" type="submit"  style="font-size:18px;width:80px; margin-top:13px; padding:2px; margin-right:5px;" name="search" value="search"/> 
                    </form>
                </div>
            </div>
                    
        <section class="main">
            <table class="tab1" cellspacing="0" cellpadding="0">
                <tr>
                    <td> </td>
                    <td>
                        <a href="html/clothes.php">
                            <img onmouseover="fun1(1)" onmouseout="fun2()" class="logo" src="images/clothes.png">
                        </a>
                    </td>
                    <td>
                        <a href="html/footwear.php">
                            <img onmouseover="fun1(2)" onmouseout="fun2()" class="logo" src="images/footwear.jpeg" >
                        </a>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <a href="html/mobiles.php">
                            <img onmouseover="fun1(3)" onmouseout="fun2()" class="logo" src="images/mobile.jpg" >
                        </a>
                    </td>
                    <td colspan="2" rowspan="2"><img class="logomain" src="images/e valley-logos_transparent.png" ></td>
                    <td>
                        <a href="html/laptops.php">
                            <img onmouseover="fun1(4)" onmouseout="fun2()" class="logo" src="images/laptop.jpg" >
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="html/luggage.php">
                            <img onmouseover="fun1(5)" onmouseout="fun2()" class="logo" src="images/luggage.png" >
                        </a>
                    </td>
                    <td>
                        <a href="html/stationary.php">
                            <img onmouseover="fun1(6)" onmouseout="fun2()" class="logo" src="images/stationary.jpg" >
                        </a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="html/food.php">
                            <img onmouseover="fun1(7)" onmouseout="fun2()" class="logo" src="images/food.jpg" >
                        </a>
                    </td>
                    <td>
                        <a href="html/accessories.php">
                            <img onmouseover="fun1(8)" onmouseout="fun2()" class="logo" src="images/accessories.webp" >
                        </a>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div id="text"></div>
                    </td>
                </tr>
            </table>
        </section>
    </div>
    <footer>
        <div class="foot" style="margin-top:0px;">
                <p>&copy; E-valley 2021</p>
        </div>
    </footer>
</body>
</html>