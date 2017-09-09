<!doctype html>
<?php
$page_id="contact";
?>
<html class="no-js" lang="">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Anbu Home-Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="css/responsive.css">
        <script src="js/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
              
    <header>
            
                <!-- header logo: style can be found in header.less -->
       <?php include_once './includes/head.php'; ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
    </header>
       

  
        
        
        <div class="page-title contact-title text-center">
          <h2 class="text-extra-bold white text-uppercase">Contact Us</h2>
          <div class="page-location text-center display-ib">
            <span class="ubuntu fz-14 green-5c">Home   <i class="gray-e9">/</i>   Contact  </span>
          </div>
        </div>

        <section class="mt-150 contact-us">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <h3 class="black h-sep">Contact <span class="text-extra-bold">Us</span></h3>
                <p class="fz-16 gray-666 mt-50">Our charity helps those people who have no hope</p>

                  <div class="mt-30" id="message"></div>
				   <form role="contact" action="contact_actions.php" enctype="multipart/form-data" method="post" autocomplete="off">
					<input type="hidden" name="mode" value="user">               
				     <div class="row">
                      <div class="col-md-6 mt-30"><input id="name" type="text" name="name" class="form-control" placeholder="First name"></div>
                      <div class="col-md-6 mt-30"><input id="address" type="email" name="address" class="form-control" placeholder="Email address"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mt-30"><input id="phone" type="text" name="phone" class="form-control" placeholder="Phone Number"></div>
                      <div class="col-md-6 mt-30"><input id="website" type="text" name="website" class="form-control" placeholder="Your website"></div>
                    </div>
                    <textarea id="message" rows="10" name="message" class="mt-30 form-control" placeholder="Write message"></textarea>
                    <div class="mt-50 submit">
                      <input type="submit" class="martel text-extra-bold text-uppercase fz-14" name="actions">
                    </div>
                  </form>
                     
              </div>
              <div class="col-md-3 col-md-offset-1 col-sm-4 mt-150">
                <div class="contact-info clearfix">
                  <div class="pull-left">
                    <h5 class="fz-15 black text-bold mb-10">Office Address</h5>
                    <span class="ubuntu fz-14 gray-777 lh-22">J.V Farms , Chittrapalayam<br>Samudram(po),Salem(DT)-636306</span>
                  </div>
                  <div class="contact-icon pull-right position-r">
                    <img src="img/office.png" alt="">
                    <img src="img/office-hover.png" alt="">
                  </div>
                  <div class="clearfix"></div>
                  <hr class="c-border">
                </div>
                <div class="contact-info clearfix mt-20">
                  <div class="pull-left">
                    <h5 class="fz-15 black text-bold mb-10">Phone</h5>
                    <span class="ubuntu fz-14 gray-777 lh-22">91-9865885558<br>91-9965885558</span>
                  </div>
                  <div class="contact-icon pull-right position-r">
                    <img src="img/phone.png" alt="">
                    <img src="img/phone-hover.png" alt="">
                  </div>
                  <div class="clearfix"></div>
                  <hr class="c-border">
                </div>
                <div class="contact-info clearfix mt-20">
                  <div class="pull-left">
                    <h5 class="fz-15 black text-bold mb-10">E-mail</h5>
                    <span class="ubuntu fz-14 gray-777 lh-22">anbumudhiyorillam @gmail.com<br>anbumudhiyorillam @yahoo.com</span>
                  </div>
                  <div class="contact-icon pull-right position-r">
                    <img src="img/mail.png" alt="">
                    <img src="img/mail-hover.png" alt="">
                  </div>
                  <div class="clearfix"></div>
                  <hr class="c-border">
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="container-fluid no-padding mt-150">
               </div>





        <footer>
          <?php include_once './includes/nav.php'; ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            
        </footer>
        <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.mixitup.js"></script>
        <script src="js/custom-map.js"></script>
        <script src="js/contact-jquery.js"></script>
        <script src="js/main.js"></script>
        
    </body>

</html>