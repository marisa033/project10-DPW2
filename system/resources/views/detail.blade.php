<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('public')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="{{url('public')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="{{url('login')}}">Login</a></li>
                            <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="{{url('public')}}/images/logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container mb-5">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="{{url('/')}}">Home</a>
                     <a href="{{url('fashion')}}">Fashion</a>
                     <a href="{{url('electronic')}}">Electronic</a>
                     <a href="{{url('jewellery')}}">Jewellery</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="{{url('public')}}/images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{url('public')}}/images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="{{url('public')}}/images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="{{url('keranjang')}}">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">basket</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
        
         <!-- banner section end -->
      </div>

      <div class="card">
          <div class="container">
              <div class="row mt-5 mb-5">
                  <div class="col-md-6">
                      <div class="card-body shadow">
                      <div class="tshirt_img"><img src="{{url('public')}}/images/tshirt-img.png"></div>
                      </div>
                  
                  </div>

                  <div class="col-md-6">
                  <h4 class="shirt_text" style="text-align:left">Man T -shirt</h4>
                  <h4 class="shirt_text" style="text-align:left">Start Price : Rp. 65.000</h4>
                  <h4 class="shirt_text" style="text-align:left">Stok   : 20pcs</h4> <hr>
                    <label for=""> Detail</label>
                    <p> - Branded fashion <br>
                        - Cocok untuk pria dan wanita (casual) <br>
                        - Nice quality, Adem dan nyaman Saat Di kenakan <br>
 
                        - Size : <br>
                        - S. 41 x 60 CM <br>
                        - M. 45 x 63 CM <br>
                        - L. 48 x 67 CM <br>
                        - XL. 51 x 71 CM <br>
                        - Bahan catton 100% <br>
                        - Kelebihanya : <br>
                        - Bahan mudah menyerap keringat. <br>
                        - Bahan tebal & sisi jahitan <br>
                        - Samping + bawah sangat rapih. <br>
                        - ( dijamin sensasinya beda banget dengan dengan kaos kami - Buktikan Sendiri Sensasinya ) <br>
                        - Sablon : <br>
                        - Halus & Lembut,Warna Solid <br>
                        - Tidak Pudar (Tajam),Tahan Lama <br>
                        - Disablon dengan heat press sistem bukan manual (tangan) <br>
                        - Happy shopping Guys :-) <br></p>
                    <button class="btn btn-primary btn-block">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>  add cart
                    </button>
                  </div>
              </div>
          </div>
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
  
      <!-- fashion section end -->

      <!-- electronic section end -->
      <!-- jewellery  section start -->
 
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="{{url('public')}}/images/footer-logo.png"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul class="social_icon">
               <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>               
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#"> 3300 3200 2200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2021 All Rights Reserved.</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{url('public')}}/js/jquery.min.js"></script>
      <script src="{{url('public')}}/js/popper.min.js"></script>
      <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>
      <script src="{{url('public')}}/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{url('public')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{url('public')}}/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>