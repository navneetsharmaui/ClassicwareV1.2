<html>
    <head>
        <title>Classicware Cart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href="/sandbox/ecommerce/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/sandbox/ecommerce/css/form.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/sandbox/ecommerce/css/font-awesome-4.5.0/css/font-awesome.min.css" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="/sandbox/ecommerce/js/jquery.min.js"></script>
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

        <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Are you sure want to clear all bookings?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
         
	 </head>
    
	<body>
      <div class="header-top">
   <div class="wrap"> 
    <div class="logo">
      <a href="/sandbox/ecommerce/index.php"><img src="/sandbox/ecommerce/images/classicware.png" alt=""/></a>
      </div>
      <div class="cssmenu">
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
        <li class="active grid"><a class="color4" href="#"><i class="fa fa-compass"></i> Cities</a></li>        
        <li><a class="color5" href="#"><i class="fa fa-file-text"></i> Blog</a></li>
        <li><a class="color6" href="/sandbox/ecommerce/New_folder/about.php"><i class="fa fa-archive"></i> About</a></li>
        <li><a class="color7" href="/sandbox/ecommerce/New_folder/contact.php"><i class="fa fa-phone"></i> Contact Us</a></li>
    </ul>
       <div class="clear"></div>
    </div>
   </div>

     
	<div id='content'>
        <div id="cart" >
            

        </div>


        <div id="products_e" align="center">
            <h2 id="head" align="center"><br /></h2>
                <table id="table" border="0" cellpadding="5px" cellspacing="1px">
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading">
                        <td>Serial</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Qty</td>
                        <td>Amount</td>
                        <td>Cancel Product</td>
                    </tr>
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    echo form_open('shopping/update_cart');
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td>
                       <?php echo $i++; ?>
                            </td>
                            <td>
                      <?php echo $item['name']; ?>
                            </td>
                            <td>
                                Rs. <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                Rs. <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                              
                            <?php 
                            // cancle image.
                            $path = "<img src='http://localhost/sandbox/ecommerce/classicware_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                            echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
                            </td>
                     <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><b>Order Total: Rs.<?php 
                        
                        //Grand Total.
                        echo number_format($grand_total, 2); ?></b></td>
                        
                        <?php // "clear cart" button call javascript confirmation message ?>
                        <td colspan="5" align="right"><input type="button" class ='fg-button teal' value="Clear Cart" onclick="clear_cart()">
                            
                            <?php //submit button. ?>
                            <input type="submit" class ='fg-button teal' value="Update Cart">
                            <?php echo form_close(); ?>
                            
                            <!-- "Place order button" on click send "billing" controller  -->
                            <input type="button" class ='fg-button teal' value="Place Order" onclick="window.location = 'shopping/billing_view'"></td>
                    </tr>
<?php endif; ?>
            </table>
            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($products as $product) {
                $id = $product['serial'];
                $name = $product['name'];
                $description = $product['description'];
                $price = $product['price'];
                ?>

                <div id='product_div'>  
                    <div id='image_div'>
                        <img src="<?php echo base_url() . $product['picture'] ?>"/>
                    </div>
                    <div id='info_product'>
                        <div id='name'><?php echo $name; ?></div>
                        <div id='desc'>  <?php echo $description; ?></div>
                        <div id='rs'><b>Price</b>:<big style="color:green">
                            Rs.<?php echo $price; ?></big></div>
                        <?php
                        
                        // Create form and send values in 'shopping/add' function.
                        echo form_open('shopping/add');
                        echo form_hidden('id', $id);
                        echo form_hidden('name', $name);
                        echo form_hidden('price', $price);
                        ?> </div> 
                    <div id='add_button'>
                        <?php
                        $btn = array(
                            'class' => 'fg-button teal',
                            'value' => 'Add to Cart',
                            'name' => 'action'
                        );
                        
                        // Submit Button.
                        echo form_submit($btn);
                        echo form_close();
                        ?>
                    </div>
                </div>

<?php } ?>

    </div>
      </div>
        <div class="footer">
          <div class="footer-top">
            <div class="wrap">
                   <div class="col_1_of_footer-top span_1_of_footer-top">
                     <ul class="f_list">
                        <li><span class="delivery"><i class="fa fa-copyright"></i> Classicware</span></li>
                     </ul>
                   </div>
                   <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><span class="delivery"><i class="fa fa-phone"></i> Customer Service :<span class="orange"> 911166764140 </span></span></li>
                     </ul>
                   </div>
                   <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><span class="delivery"><i class="fa fa-rocket"></i> Locals are the best</span></li>
                     </ul>
                   </div>
                  <div class="clear"></div>
             </div>
         </div>
         <div class="copy">
           <div class="wrap">
               <p> &copy; Designed By <a href="https://in.linkedin.com/in/navneetsharma3" target="blank">Navneet Sharma</a> and <a href="https://in.linkedin.com/pub/harshit-parikh/95/540/4a6" target="blank">Harshit Parakh</a>. Made with <i class="fa fa-heart-o"></i> from Vikings</p>
           </div>
         </div>
       </div>
       <script type="text/javascript">
            $(document).ready(function() {
            
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                };
                
                
                $().UItoTop({ easingType: 'easeOutQuart' });
                
            });
        </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>