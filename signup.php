<!DOCTYPE html>
<html lang="en">
<head>
  <title>Flavouredi Sign Up</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('assets/images/bg-09.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-25 p-b-54">
        <form method="post" action="signupuser.php" name="signup" class="login100-form validate-form">
          <span class="login100-form-title p-b-29">
            Sign Up
          </span>

           <div class="wrap-input100 m-b-23 validate-input" data-validate = "First name is required">
            <span class="label-input100">First Name</span>
            <input class="input100" type="text" id="firstname" name="firstname" placeholder="Type your first name">
            <span class="focus-input100" ></span>
          </div>

           <div class="wrap-input100 m-b-23 validate-input" data-validate = "Last name is required">
            <span class="label-input100">Last Name</span>
            <input class="input100" type="text" id="lastname" name="lastname" placeholder="Type your last name">
            <span class="focus-input100" ></span>
          </div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="email" id="email" name="email" placeholder="Type your email">
            <span class="focus-input100" ></span>
          </div>

          <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" id="pass" name="pass" placeholder="Type your password">
            <span class="focus-input100" ></span>
          </div>

           <div class="wrap-input100 validate-input m-b-23" data-validate = "Phone number is required">
            <span class="label-input100">Phone number</span>
            <input class="input100" type="tel" id="tel" name="tel" placeholder="Type your phone number">
            <span class="focus-input100" ></span>
          </div>

           <div class="wrap-input100 validate-input m-b-23" data-validate = "Street is required">
            <span class="label-input100">Street</span>
            <input class="input100" type="text" id="street" name="street" placeholder="Type your street">
            <span class="focus-input100" ></span>
          </div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "City is required">
            <span class="label-input100">City</span>
            <input class="input100" type="text" id="city" name="city" placeholder="Type your city">
            <span class="focus-input100" ></span>
          </div>

           <div class="wrap-input100 validate-input m-b-23" data-validate = "Pin code is required">
            <span class="label-input100">Pin Code</span>
            <input class="input100" type="tel" id="pin" name="pin" placeholder="Type your pin code">
            <span class="focus-input100" ></span>
          </div>

           <div class="wrap-input100 validate-input m-b-23" data-validate = "State is required">
            <span class="label-input100">State</span>
            <input class="input100" type="text" id="state" name="state" placeholder="Type your state">
            <span class="focus-input100" ></span>
          </div>
          
          <div class="text-left p-t-12 p-b-26">
            <a  href="login.php">
              <b style="color:gray;font-size:15px; text-decoration: underline;">Login</b>
            </a>
          </div>
          
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Sign Up
              </button>
            </div>
          </div>

          
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/main.js"></script>

</body>
</html>