<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" id="SignUp" style="display: none;">
    <h1 class="form-title">Sign Up</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="fname" id="fname" placeholder="First Name" required>
            <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="lname" id="lname" placeholder="Last Name" required>
            <label for="lname">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <input type="Submit" class="btn" value="Register" name= "register">
    </form>
    <p class="or">
        ------------or-------------
    </p>
    <div class="icons">
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-microsoft"></i>
    </div>

    <div class="sign_in">
        <p> Already Have Account ? </p>
        <button id="signinbtn">Sign In</button>
    </div>
</div>

<div class="container" id="SignIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action=register.php">
        <div class="input-group">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="password" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="login" name= "login">
    </form>
    <p class="or">
        ------------or-------------
    </p>
    <div class="icons">
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-microsoft"></i>
    </div>
    <div class="sign_in">
        <p class="recover"><a href=""> Forget Password ? </p></a>
        <button id="signupbtn">Sign Up</button>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>