<!DOCTYPE HTML>
<html>
<head>
<title><?php if (isset($page_title)): ?>Classicware | <?php endif; ?><?php echo $page_title; ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/sandbox/ecommerce/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/sandbox/ecommerce/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/sandbox/ecommerce/css/contactstyle.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/sandbox/ecommerce/css/font-awesome-4.5.0/css/font-awesome.min.css" type="text/css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script type="text/javascript" src="/sandbox/ecommerce/js/jquery.min.js"></script>
<!-- FlexSlider -->
  <script src="/sandbox/ecommerce/js/imagezoom.js"></script>
    <script defer src="/sandbox/ecommerce/js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="/sandbox/ecommerce/css/flexslider.css" type="text/css" media="screen" />
    <script>
    // Can also be used with $(document).ready()
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          controlNav: "thumbnails"
         });
      });
    </script>
  <!-- //FlexSlider-->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="/sandbox/ecommerce/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/sandbox/ecommerce/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
      $(function()
      {
        $('.scroll-pane').jScrollPane();
      });
    </script>
<!-- top scrolling -->
<script type="text/javascript" src="/sandbox/ecommerce/js/move-top.js"></script>
<script type="text/javascript" src="/sandbox/ecommerce/js/easing.js"></script>
   <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="/sandbox/ecommerce/js/ca-pub-2074772727795809.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>

</head>
<body>
  <div class="header-top">
   <div class="wrap"> 
    <div class="logo">
      <a href="/sandbox/ecommerce/index.php"><img src="/sandbox/ecommerce/images/classicware.png" alt=""/></a>
      </div>
      <div class="cssmenu">
       <ul>
         <li class="active"><a href="/sandbox/ecommerce/New_folder/signup.php"><i class="fa fa-sign-in"></i> Signup</a></li>
       <?php if (Auth::getInstance()->isLoggedIn()): ?>

        <?php if (Auth::getInstance()->isAdmin()): ?> 
         <li><a href="/sandbox/ecommerce/New_folder/admin/users"><i class="fa fa-user"></i> Admin</a></li> 
        <?php endif; ?>  
         <li><a href="/sandbox/ecommerce/New_folder/profile.php"><i class="fa fa-user"></i> <?php echo htmlspecialchars(Auth::getInstance()->getCurrentUser()->name); ?></a></li> 
         <li><a href="/sandbox/ecommerce/New_folder/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
         <li><a href="/sandbox/ecommerce/classicware_cart/index.php/shopping"><i class="fa fa-shopping-cart"></i> Cart</a></li>
        
       <?php else: ?>
         
         <li><a href="/sandbox/ecommerce/New_folder/login.php"><i class="fa fa-sign-out"></i> Login</a></li>

       <?php endif; ?>

       </ul>
    </div>
    <div class="clear"></div>
  </div>
   </div>
   <div class="header-bottom">
    <div class="wrap">
      <!-- start header menu -->
    <ul class="megamenu skyblue">
        <li><a class="color1" href="/sandbox/ecommerce/index.php"><i class="fa fa-home"></i> Home</a></li>
      <li class="grid"><a class="color2" href="/sandbox/ecommerce/classicware_cart/index.php/shopping"><i class="fa fa-product-hunt"></i> Products</a></li>
        <li class="active grid"><a class="color4" href="/sandbox/ecommerce/New_folder/cities.php"><i class="fa fa-compass"></i> Cities</a></li>        
        <li><a class="color5" href="#"><i class="fa fa-file-text"></i> Blog</a></li>
        <li><a class="color6" href="/sandbox/ecommerce/New_folder/about.php"><i class="fa fa-archive"></i> About</a></li>
        <li><a class="color7" href="/sandbox/ecommerce/New_folder/contact.php"><i class="fa fa-phone"></i> Contact Us</a></li>
    </ul>
       <div class="clear"></div>
    </div>
   </div>
