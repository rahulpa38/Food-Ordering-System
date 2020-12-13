<?php 
 session_start();
  if (!isset($_SESSION['user_id']))
   {
      header("location: login.php");
   }
  extract($_POST);
  include("database.php");
  $user_id  = $_SESSION['user_id'];
  $recent_orders = mysqli_query($conn,"select * from recent_orders where user_id = $user_id GROUP BY id ORDER BY id DESC");
  $address = mysqli_fetch_array( mysqli_query($conn,"select street, city,state,pin from login where id = $user_id"));
  $keys = array('street','city','state','pin');
           foreach ($keys as $key ) {
             unset( $address[$key]);
          }

 $final_address = implode(",", $address);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Recent Orders</title>

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
             <!-- Tables -->
              <section style="padding-top: 20px">
                <form method="post" action="#">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                     


                     
                        <?php 
                       if(mysqli_num_rows($recent_orders) > 0){ ?>
                         <div class="section-heading">
                        <h2>Recent Orders </h2>
                      </div>
                      <div>
                       <?php $total_price = 0;
                        $row = mysqli_fetch_array( mysqli_query($conn,"select order_id, timestamp,card from recent_orders where user_id = $user_id GROUP BY id ORDER BY id DESC"));
                        $previous_order_id = $row['order_id'];
                        $previous_order_time = date("jS F Y, g:i:s a",$row['timestamp']);
                        $card_number = $row['card'];
                      

                  
                         ?>
                         <div class=" py-2 col-12 recent-order-date " style="background-color:#fff;margin-left: -15px;margin-right: -15px;"><mark class="food-item-name"><?php echo $previous_order_time ?></mark></div>
                          <div class="col-12" style="background-color:#fff;margin-left: -15px;margin-right: -15px;"><span class="order_id_recent"> Order id : <?php echo $previous_order_id ?></span>
                        </div>
                        <div class="col-12" style=";margin-left: -15px;margin-right: -15px;background-color:#fff"><span class="font-size:15px" style=""> Card : *** <?php echo $card_number ?></span>
                        </div>
                        <?php
                        $flag = false;
                        $count_order_id = 0;
                          while( $recent_order = mysqli_fetch_array( $recent_orders, MYSQLI_ASSOC)){
                              
                              $current_order_id = $recent_order['order_id'];
                              $count_order = mysqli_fetch_array( mysqli_query($conn,"select COUNT(order_id) as count_order_id from recent_orders where user_id = $user_id and order_id = '$current_order_id'"));
                              
                              
                              if( $previous_order_id !== $recent_order['order_id'] ){
                                  $count_order_id = 1;
                                  $total_price = $recent_order['price'];
                                  $flag = true;
                                  $previous_order_id = $recent_order['order_id'];
                              }
                              else{
                                  $count_order_id++;
                                  $flag = false;
                                  $total_price = $total_price + $recent_order['price'];

                              }
                              
                              ?>
                              
                              <div <?php if( $flag ){ ?>
                                style="border-bottom: 2px solid #c6dbd8" <?php } ?>
                                >
                              <div class="row py-2" style="background-color:#fff;">
                                <?php 
                                    if(  $flag ){
                                      
                                ?>
                               <div class="col-12 recent-order-date"><mark class="food-item-name"><?php echo date("jS F Y, g:i:s a",$recent_order['timestamp']) ?></mark></div>
                                <div class="col-12"><span class="order_id_recent"> Order id : <?php echo $recent_order['order_id'] ?></span>
                              </div>
                              <div class="col-12" style=";background-color:#fff"><span class="font-size:15px" style=""> Card : *** <?php echo $recent_order['card'] ?></span>
                              </div>
                             <?php } ?>
                              <div class="col-12 food-item"><mark class="food-item-name"><?php echo $recent_order['name'] ?></mark>
                               
                              </div>
                              <div class="col-md-8 pt-2"><span class="food-item-ingredient">Order Details</span>
                                <div><?php echo $recent_order['order_details'] ?></div>
                              </div>
                              
                              <div class="col-md-4 pt-2"><span class="food-item-ingredient">Quantity</span>
                                <div><?php echo $recent_order['quantity'] ?></div>
                              </div>
                             <?php
                              if( number_format( $count_order_id) === number_format( $count_order['count_order_id'] ) ){ 
                                ?>
                                <div class="col-md-12 pt-2 pb-4" style="font-size:15px"><span class="food-item-ingredient">Address</span>
                              <div class=""><?php echo $final_address ?></div>
                            </div>
                                <div class="col-md-12 pt-2 pb-4 cart-item-price" style=""><span class="food-item-ingredient">Total Price</span>
                              <div class="cart-item-price-number"><mark style="background-color: #f2eac6">$<?php echo $total_price ?></mark></div>
                            </div>
                            <?php
                              }
                            ?>
                        </div>
                        <?php 

                          }
                        } else{ ?>
                        <div class="section-heading">
                        <h2>No Recent Orders</h2>
                      </div>
                     <?php }
                      ?> 
                       </div>

                     
                    </div>
                    </div>
                  </div>
                </div>
            </form>
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
               <!--  <li><a class="recent-order" href="payment.php">Payment</a></li> -->
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
  </body>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


  </body>

</html>
