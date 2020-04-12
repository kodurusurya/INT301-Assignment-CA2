<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Assignment [INT 304]</title>

<style type="text/css">
    body
{
    background-image: url("bg2.jpg");
    background-position: 100%;
    width: 100%;
    height: 100%;
    background-color: #fff;
    padding: 0;
}
.main-container
{
    margin: 25px;
    padding:10px;
    background-color: #ddd;
    margin-left: 15%;
    margin-right: 15%;
    margin-top: 5%;
}

.heading
{
    color:#030353;
    font-weight: bold;
}

.sub-heading
{
    margin-top: 30px;
    font-size: 16px;
    color:#333;
}

.container
{
    display: flex;
    background-color: transparent;
    margin-top: 10px;
    height:280px;
    overflow: hidden;
    padding:15px;
}

.signup-container
{
    background-color: #aaa;
    width: 50%;
    padding:5px;
    overflow: hidden;
    height:100%;
}

.form-container
{
    width: 95%;
}

.form-input
{
    margin-top: 10px;
    margin-bottom: 10px;
    width: 100%;
    color: #fff;
}


.form-element
{
    border-color: red;
    padding:8px;
    width: 95%;
}
.register_btn
{
    margin-top: 15px;
    float: right;
    background-color: transparent;
    border: 2px solid darkblue;
    color: #030353;
    font-weight: bold;
    padding:8px;
    text-align: center;
    cursor: pointer;
    width: 120px;
    transition: 0.3s;
}
.register_btn:hover
{
    background-color: #030353;
    color:#fff;
}

.login-cotainer
{
    width:50%;
    height: 89.5%;
    background-color: #030353;
    padding:20px;
}

.login-element
{
    padding:8px;
    width: 95%;
}

.login_btn
{
    float: right;
    background-color: transparent;
    border: 2px solid orange;
    font-weight: bold;
    color: #fff;
    padding:8px;
    text-align: center;
    cursor: pointer;
    width: 120px;
    transition: 0.3s;
}
.login_btn:hover
{
    background-color: orange;
    color:#fff;
}

.modal-footer
{
    float: right;
    background-color: transparent;
    margin-top: 5px;
    margin-left: 200px;
    color: #fff;
    padding: 8px;   
}

.modal-footer:hover
{
    text-decoration: underline;
    color: orange;
}

</style> 
</head>
<body>
    <div class="main-container">
        <div class="heading">
            <h1>Enter the system</h1>
        </div>
        <div class="sub-heading">
            It is necessary to login in Your account in order to sign up for a course.
        </div>
        <div class="container">
            <div class="signup-container">
                <div class="heading">
                    <font color="grey">ARE YOU NEW?</font> REGISTER
                </div>
                <div class="form-container">
                    <form onsubmit="return checkform()" action="./register.php" method="POST">
                        <div class="form-input">
                            <input type="text" class="form-element" name="user_name" id="user_name" placeholder="User name" required/>
                        </div>
                        <div class="form-input">
                            <input type="email" class="form-element" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-input">
                            <input type="password" class="form-element" name="password" id="password" placeholder="Password" required/>
                        </div>
                        <div class="form-input">
                            <input type="password" class="form-element" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required/>
                        </div>
                        <div class="form-input">
                            <input type="submit" class="register_btn" name="register" id="register" value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-cotainer">
                <div class="heading">
                    <font color="white">ALREADY A STUDENT?LOGIN</font>
                </div>
                <form action="./login.php" method="POST">
                        <div class="form-input">
                            <input type="text" class="login-element"  name="user_name" id="login_user_name" placeholder="User name" value="<?php if(isset($_COOKIE['user_name']))  echo $_COOKIE['user_name']; ?>" required/>
                        </div>
                        <div class="form-input">
                            <input type="password"  class="login-element" name="password" id="login_password" placeholder="Password" value="<?php if(isset($_COOKIE['password']))  echo $_COOKIE['password']; ?>" required/>
                        </div>
                        <div class="form-input">
                            <input type="checkbox" name="remember" value = "1">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <div class="form-input">
                            <input type="submit" class="login_btn" name="login" id="login" value="Login"/>
                        </div>
                        
                        <div class="modal-footer">
                            <a onclick="alert("Sorry Cannot Help");">Forgot Password?</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
<script src="./main.js"></script>
</body>
</html>