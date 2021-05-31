<?php
    session_start();
    include("connection.php");
    include("functions.php");
?>
<html>
    <head>
        <title>
            my title
        </title>
        <style>
            .viewbg{
                background-color:white;
                height:100%;
                width:100%;
            }
            *{
                margin:0;
                padding:0;
            }
            .product{
                width:350px;
                padding:25px;
                box-sizing:border-box;
                margin:10px;
            }
            .bg-model{
                width:100%;
                height:100%;
                background-color:rgba(0,0,0,0.7);
                position:absolute;
                top:0;
                display:none;
                justify-content:center;
                align-items:center;

            }
            .modalcontent{
                width:700px;
                height:600px;
                background-color:white;
                opacity:1;
                border-radius:4px;
                text-align:center;
                position:relative;
                
            }
            #img1{
                position:relative;
                left:40px;
                top:5px;
            }
            .close{
                position:absolute;
                top:0;
                right:14px;
                font-size:42px;
                transform:rotate(45deg);
                cursor:pointer;
            }
        </style>
            
    </head>
    <body>
    <div class="viewbg">
        <form class="product">
            <img src="womenclothingmain.jpg" height=300px width=300px>
            <p>White floral top with cold sleeves<p>
            <p>price:500</p>
            <button>AddToCart</button>
            <a href="#" id="button" class="button">Details</a>


        </form>
        <img src="accesoriesmen.jpg" height=300px width=300px>
        <img src="electronics.jpg" height=300px width=300px>
        <img src="images.jfif" height=300px width=300px>
        <img src="main.jpg" height=300px width=300px>
        <img src="registration.jpg" height=300px width=300px>
    </div>
    <div class="bg-model">

        <div class="modalcontent">
            <form>
            <div class="close">+</div>
            <img src="womenclothingmain.jpg" id="img1" height=400px width=300px>
            <p>Description of the product comes here</p>
            <button>Add to cart</button>
            </form> 
        
        </div>
    </div>

    <script>
        document.getElementById('button').addEventListener('click',function(){
            document.querySelector('.bg-model').style.display='flex';
        });
        document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.bg-model').style.display='none'; 
        })
    </script>
    </body>
    </html>
    