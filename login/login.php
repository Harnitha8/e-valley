<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evalley login</title>
    <link rel="stylesheet" href = "login.css">
</head>
<body>
    <header class="nav-bar">
                <div class="topnav" style="background:#333;display: flex;"> 
                    <a class="back" href="../index.php"><img width="70px" src="../html/back.jpg"></a>
                </div>
    </header>
    <div class="maindiv">
    <div class="login1">
        <form name="f1" onclick = "" action = "authentication.php" method = "POST">
            <h2>USER LOGIN</h2>
            <input id= "username" type="text" placeholder="Enter email" name="user_name" required autocomplete="on"><br>
            <input id = "userpassword" type="password" placeholder="password" name="password" required><br>
            <button id="button1" >submit</button><br><br>
            <p>
                Don't have an account?
            </p>
            <a href="signup.php" id="signup">Signup</a>

        </form>
    </div>
    <div class="image1"><img src="loginimage.jpg"/></div>
    <div class="login2">
        <form name="f1" onclick = "" action = "authenticationadmin.php" method = "POST">
            <h2>ADMIN LOGIN</h2>
            <input id= "adminU" type="text" placeholder="Enter email" name="admin_name" autocomplete="on" required><br>
            <input id = "adminP" type="password" placeholder="password" name="admin_password" required><br>
            <button id="button2" >login</button><br><br>
        </form>
    </div>
</div>
</body>
</html>
