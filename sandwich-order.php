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

    <title>Pizza</title>

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
          <div class="inner pizza-bg">

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
                      <h2>Order a Sandwich</h2>
                    </div>
                    <form name="sandwich_order" action="cart-sandwich-handling.php" method="post">
                      <div class="row">
  
                        <div class="col-md-12">
                          <div class="form-label">Select a bread</div>
                          <select name="sandwich_bread_category" id="category" required>
                            <option value="" selected>Select bread type</option>
                            <option value="Whole Wheat">Whole Wheat</option>
                            <option value="Sour Dough">Sour Dough</option>
                            <option value="White">White</option>
                            <option value="Rye">Rye</option>
                            <option value="Multigrain">Multigrain</option>
                          </select>
                        </div>

                         <div class="col-md-12">
                          <div class="form-label">Size</div>
                          <select name="sandwich_size" id="sandwich_size" required>
                            <option value="" selected>Select size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                          </select>
                        </div>

                        

                        <div class="col-md-12 col-sm-4">
                           <div class="form-label">Veggies</div>
                          <div style="padding-top:10px">
                           <input class="checkbox-style" type="checkbox" id="Tomato" name="sandwich_veggies[]" value="Tomato">
                              <label for="Tomato">Tomato</label><br>
                            <input class="checkbox-style" type="checkbox" id="Olives" name="sandwich_veggies[]" value="Olives">
                              <label for="Olives">Olives</label><br>
                            <input class="checkbox-style" type="checkbox" id="Onion" name="sandwich_veggies[]" value="Onion">
                              <label for="Onion">Onion</label><br>
                            <input class="checkbox-style" type="checkbox" id="bell_Pepper" name="sandwich_veggies[]" value="Bell Pepper">
                              <label for="bell_Pepper">Bell Pepper</label><br>
                          </div>
                        </div>

                         <div style="margin-top: 20px" class="col-md-6">
                          <div class="form-label">Cheese</div>
                          <select name="sandwich_cheese" id="sandwich_cheese" required>
                            <option value="" selected>Select a cheese</option>
                            <option value="American">American</option>
                            <option value="Fontina">Fontina</option>
                            <option value="Medium cheddar">Medium cheddar</option>
                          </select>
                        </div>

                        <div style="margin-top: 20px" class="col-md-6">
                          <div class="form-label">Quantity</div>
                           <input type="number"  id="sandwich_quantity" name="sandwich_quantity" value="" required placeholder="Enter Quantity"/>
                        </div>

                        <div class="col-md-3">
                          <div class="form-label">Price ( In $ )</div>
                          <input class="sandwich_final_price" type="text" id="sandwich_final_price" name="sandwich_final_price" value="0" disabled>
                          
                        </div>
                        
                        <div class="col-md-12">
                          <button type="submit" id="form-submit" class="button">Add to cart</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
     <script type="text/javascript">
         $(document).ready(function(){
            
              let sandwich_size = $('#sandwich_size option:selected').val();
              size_price = 0;
              $("#sandwich_size").change(function(){
                sandwich_size = $('#sandwich_size option:selected').val();
                switch (sandwich_size){
                     case 'Small':
                    size_price = 7;
                    break;
                  case 'Medium':
                    size_price = 14;
                    break;
                  case 'Large':
                    size_price = 18;
                    break;
                  default : 
                    size_price = 0;
                    break;
                  }
              

              let sandwich_quantity = $('#sandwich_quantity').val();
              $("#pizza-quantity").change(function(){
                sandwich_quantity = $('#sandwich_quantity').val();
              });
              
              let final_sandwich_price = size_price * sandwich_quantity;
              
              $(".sandwich_final_price").val(final_sandwich_price);

          });

            $("#sandwich_size").change(function(){
              let pizza_size = $('#sandwich_size option:selected').val();
              size_price = 0;
              $("#sandwich_size").change(function(){
                sandwich_size = $('#sandwich_size option:selected').val();
                switch (sandwich_size){
                     case 'Small':
                    size_price = 7;
                    break;
                  case 'Medium':
                    size_price = 14;
                    break;
                  case 'Large':
                    size_price = 18;
                    break;
                  default : 
                    size_price = 0;
                    break;
                  }

              let sandwich_quantity = $('#sandwich_quantity').val();
              $("#pizza-quantity").change(function(){
                sandwich_quantity = $('#sandwich_quantity').val();
              });
              
              let final_sandwich_price = size_price * sandwich_quantity;
              
              $(".sandwich_final_price").val(final_sandwich_price);

          });
            });


                 $("#sandwich_quantity").change(function(){
                  sandwich_size = $('#sandwich_size option:selected').val();
                  switch (sandwich_size){
                     case 'Small':
                    size_price = 7;
                    break;
                  case 'Medium':
                    size_price = 14;
                    break;
                  case 'Large':
                    size_price = 18;
                    break;
                  default : 
                    size_price = 0;
                    break;
                  }
                

                let sandwich_quantity = $('#sandwich_quantity').val();
              $("#pizza-quantity").change(function(){
                sandwich_quantity = $('#sandwich_quantity').val();
              });
              
              let final_sandwich_price = size_price * sandwich_quantity;
              
              $(".sandwich_final_price").val(final_sandwich_price);

          });
          });
    </script>
</body>


  </body>

</html>
