 <?php
 session_start();
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="css/style.css">
     
</head>
<body>
    
    <section class="left-section">
        <div id="left-cover" class="cover cover-hide">
            <img src="img/cover.png" alt="">
            <h1>Welcome TO ENSIBOT </h1>
            <h3>Already have an account ?</h3>
            <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1>Login</h1>
            <form action="login.php" method="post">
                <input type="text" name="user-name" class="input-box" placeholder="User Name">
                <input type="password" name="user-pass" class="input-box" placeholder="Password">
                <input type="submit" name="login-btn" class="btn" value="Login">
                
                   
                   <center>
                   <p  style="margin-top:5%;
                         color:red;
                         font-size: medium;" >

                   
                <?php
                if(isset($_SESSION['message'])){
                    echo    $_SESSION['message'];
                    unset ($_SESSION['message']);
                
                }
                ?>
                </p>
                </center>
                
            </form>
        </div>
    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element">
            <img src="img/cover.png" alt="">
            <h1>Welcome To ENSIBOT !</h1>
            <h3>Don't have an account ?</h3>
            <button type="button" class="switch-btn" onclick="switchSignup()">Signup</button>
        </div>
        <div id="right-form" class="form form-hide">
            <h1>Signup</h1>
            <form action="signup.php" method="post">
                <input type="text" name="user-name" class="input-box" placeholder="User Name">
                <input type="email" name="user-email" class="input-box" placeholder="Email">
                <input type="password" name="user-pass" class="input-box" placeholder="Password">
                <input type="submit" name="signup-btn" class="btn" value="Signup">
            </form>
        </div>
    </section>

    <script src="js/main.js"></script>
    

</body>
</html>