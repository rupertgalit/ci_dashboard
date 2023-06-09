<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login and Register</title>

    <!--layout styles-->
    <link rel="stylesheet" href=<?php echo base_url('./assets/css/login-register.css');?>>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--internal css-->
    <style>
    body{
    /* background: #ecf0f4; */
   background: linear-gradient(-45deg, #d4e1d5, #cad0d5, #9ba7a2, #aecfc1);
    color:white;
    }
     </style>
<body>
<section id="form">
    <div id="toggle-forms">
        <button class="waves-effect waves-light active" id="login">Login</button>
        <button class="waves-effect waves-light" id="register">Register</button>
    </div>
    <form class="col s12">
        <div class="row center-align">
            <h4 class="white-text">login</h4>
        </div>
        <div class="row">
            <div class="input-field">
                <input id="email" type="email" class="validate" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field">
                <input id="password" type="password" class="validate" required>
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row center-align">
            <button class="btn waves-effect waves-light">
                Login
            </button>
        </div>
         <p class="forgot">Forgot Password?</p>
        <ul class="animate">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </form>
    <form class="col s12" >
        <div class="row center-align">
            <h4 class="white-text">register</h4>
        </div>
        <div class="row">
            <div class="input-field">
                <input id="email" type="email" class="validate" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field">
                <input id="password" type="password" class="validate" required>
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="validate" required>
                    <label for="password">Re-Password</label>
                </div>
            </div>
        <div class="row center-align">
            <button class="btn waves-effect waves-light">
                Register
            </button>
        </div>
        <ul class="animate">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </form>
</section>

    <!-- Custom js for this page -->
    <script src=<?php echo base_url('./assets/js/login.js');?>></script>

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
   <!-- End custom js for this page --> 
 

</body>
</html>

