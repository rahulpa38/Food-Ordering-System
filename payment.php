<?php 
 session_start();
  if (!isset($_SESSION['user_id']))
   {
      header("location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Payment</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner payment-bg">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="homepage.php">Flavoredi</a>
                 <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="40" viewBox="0 0 24 24"><path d="M24 3l-.743 2h-1.929l-3.474 12h-13.239l-4.615-11h16.812l-.564 2h-13.24l2.937 7h10.428l3.432-12h4.195zm-15.5 15c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.9-7-1.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z"/></svg></a>
              </div>
            </header>
            <div>
            <!-- Banner -->
            <section class="main-banner">
              <!-- Forms -->
            <section class="forms">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Payment Details</h2>
                    </div>
                    <form  name="payment" action="payment-processing.php" method="post" onSubmit="return check();">
                      <div class="row">
  
                        <div class="col-md-12">
                          <div class="form-label">Full Name</div>
                            <input type="text" name="full_name" id="name" required placeholder="Enter your full name"/>
                        </div>

                         <div class="col-md-6">
                          <div class="form-label">Credit card number</div>
                            <input id="ccn" name="card_number" type="tel" inputmode="numeric" pattern="[0-9\s]{13,16}" autocomplete="cc-number" maxlength="16" placeholder="xxxx xxxx xxxx xxxx" oninvalid="setCustomValidity('Please enter correct credit card number')" 
   oninput="setCustomValidity('')" >
                          
                        </div>

                        <div class="col-md-6">
                         <div class="form-label">Cvv</div>
                          <input id="cvv" name="cvv" type="tel" inputmode="numeric" pattern="[0-9\s]{3}" autocomplete="cvv" maxlength="3" placeholder="xxx" oninvalid="setCustomValidity('Please enter correct 3-digit Cvv number')" 
   oninput="setCustomValidity('')">
                        </div>
                       <div class="col-md-6">
                          <div class="form-label">Card Expiry</div>
                           <input name="expiry_card_number" id="expiry" type="text" required placeholder="MM/YY">
                          </div>
                       
                        
                        <div class="col-md-12">
                          <button type="submit" id="form-submit" class="button">Place order</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>

            </section>
          </div>
          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <h3 style="padding: 40px 0 0 20px;color:#FFF;letter-spacing: 2px">FLAVOREDI </h3>
            </section>
              
            <!-- Menu -->
            <nav id="menu">
              <ul>
                <li><a href="homepage.php">Homepage</a></li>
                <li><a href="pizza-order.php">Pizza</a></li>
                <li><a href="sandwich-order.php">Sandwich</a></li>
                <li><a href="pasta-order.php">Pasta</a></li>
                <li><a class="recent-order" href="recent-orders.php">Recent Orders</a></li>
                <li><a class="logout" href="logout.php">Logout</a></li>
                <!-- <li><a class="recent-order" href="payment.php">Payment</a></li> -->
              </ul>
            </nav>

             <section id="lab_social_icon_footer">
            
            <div class="container" style="margin-top: 30px !important;margin-left:0px !important;padding-left:0">
                <div>
                      <a target="_blank" href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>&nbsp;&nbsp;
                      <a target="_blank" href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>&nbsp;&nbsp;
                      <a target="_blank" href="http://instagram.com/"><i id="social-ig" class="fa fa-instagram fa-2x social"></i></a>&nbsp;&nbsp;
                      <a target="_blank" href="http://youtube.com/"><i id="social-yt" class="fa fa-youtube fa-2x social"></i></a>&nbsp;&nbsp;
            </div>
        </div>
        </section>
           
          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      function normalizeYear(year){
    // Century fix
    var YEARS_AHEAD = 20;
    if (year<100){
        var nowYear = new Date().getFullYear();
        year += Math.floor(nowYear/100)*100;
        if (year > nowYear + YEARS_AHEAD){
            year -= 100;
        } else if (year <= nowYear - 100 + YEARS_AHEAD) {
            year += 100;
        }
    }
    return year;
}

function check(){
    var match=$('#expiry').val().match(/^\s*(0?[1-9]|1[0-2])\/(\d\d|\d{4})\s*$/);
    if (!match){
        alert("Input string isn\'t match the expiration date format or date fragments are invalid.");
        
        return false;
    }
    var exp = new Date(normalizeYear(1*match[2]),1*match[1]-1,1).valueOf();
    var now=new Date();
    var currMonth = new Date(now.getFullYear(),now.getMonth(),1).valueOf();
    if (exp<=currMonth){
       console.log('inValid');
       alert("The card is expired");
       $("#expiry").addClass("error-expiry");
        return false;
    }
}
    </script>
</body>


  </body>

</html>
