<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <title>Enfold Free Responsive HTML5 Template | Template Stock</title>
   <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet' type='text/css'>
   <!-- ionicons Fonts for icons -->
   <link href="{{ asset('/css/ionicons.min.css')}}" rel="stylesheet">
   <!-- bootstrap -->
   <link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet">
   <!-- Styles CSS-->
   <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
   <!-- Animate CSS-->
   <link href="{{ asset('/css/animate.css')}}" rel="stylesheet">
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="box-layout">
   <!-- Page Loader -->
   <div class="page-loader">
      <div class="loader">
         <span class="cssload-loading"></span>
      </div>
   </div>
   <!-- End Page Loader -->
   <div class="inner-conterner">
      <!-- inner-conterner -->
      <header class="site-header">
         <div class="header-inner">
            <!-- navigation panel -->
            <div class="container">
               <div class="row">
                  <div class="header-table col-md-12">
                     <div class="brand">
                        <a href="index.html">
                           <img src="images/logo.png" alt="Enfold">
                        </a>
                     </div>
                     <nav id="nav-wrap" class="main-nav">
                        <div id="mobnav-btn"> </div>
                        <ul class="sf-menu">
                           <li class="current">
                              <a href="/">Home</a>
                           </li>
                           <li>
                              <a href="/product">Product</a>                             
                           </li>
                           <li>
                              <a href="/login">Log In</a>
                           </li>
                           <li class="menu-search-bar">
                              <a id="search-label"><i class="ion-search"></i></a>
                              <form class="search-bar" id="searchform">
                                 <input type="text" placeholder="Search..." name="s">
                              </form>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- End navigation panel -->
            </div>
            <!-- End navigation panel -->
         </div>
      </header>
      <div class="container">
          @yield ('container')
</div>
      <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/superfish.js"></script>
   <script src="js/jquery.easing.js"></script>
   <script src="js/wow.js"></script>
   <script src="js/jquery.isotope.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.magnific-popup.js"></script>
   <script src="js/jflickrfeed.min.js"></script>
   <script src="js/jquery.fitvids.js"></script>
   <script src="js/jquery.fractionslider.min.js"></script>
   <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
   <script type="text/javascript" src="js/SmoothScroll.js"></script>
   <script src="js/main.js"></script>
</body>

</html>