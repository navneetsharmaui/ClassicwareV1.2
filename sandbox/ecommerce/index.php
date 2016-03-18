<?php

/**
 * Profile
 */

// Initialisation
require_once('New_folder/includes/init.php');

// Require the user to be logged in before they can see this page.
Auth::getInstance()->requireLogin();

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Home';
include('New_folder/includes/header.php');

?>

       <div class="index-banner">
          <div class="wmuSlider example1" style="height: 560px;">
        <div class="wmuSliderWrapper">
          <article style="position: relative; width: 100%; opacity: 1;"> 
            <div class="banner-wrap">
              <div class="slider-left">
              <img src="images/banner1.jpg" alt=""/> 
            </div>
             <div class="slider-right">
                <h1>Local</h1>
                <h2>Wares</h2>
                <p>Find your local products here</p>
                <div class="btn"><a href="/sandbox/ecommerce/New_folder/tea.php">Darjeeling</a></div>
             </div>
             <div class="clear"></div>
           </div>
          </article>
           <article style="position: absolute; width: 100%; opacity: 0;"> 
             <div class="banner-wrap">
              <div class="slider-left">
              <img src="images/banner2.jpg" alt=""/> 
            </div>
             <div class="slider-right">
                <h1>Local</h1>
                <h2>Wares</h2>
                <p>Find your local products here</p>
                <div class="btn"><a href="/sandbox/ecommerce/New_folder/papier.php">Srinagar</a></div>
             </div>
             <div class="clear"></div>
           </div>
           </article>
           <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">
              <div class="slider-left">
              <img src="images/banner1.jpg" alt=""/> 
            </div>
             <div class="slider-right">
                <h1>Local</h1>
                <h2>Wares</h2>
                <p>Find your local products here</p>
                <div class="btn"><a href="/sandbox/ecommerce/New_folder/tea.php">Darjeeling</a></div>
             </div>
             <div class="clear"></div>
           </div>
           </article>
           <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">
              <div class="slider-left">
              <img src="images/banner2.jpg" alt=""/> 
            </div>
             <div class="slider-right">
                <h1>Local</h1>
                <h2>Wares</h2>
                <p>Find your local products here</p>
                <div class="btn"><a href="/sandbox/ecommerce/New_folder/papier.php">Srinagar</a></div>
             </div>
             <div class="clear"></div>
           </div>
           </article>
           <article style="position: absolute; width: 100%; opacity: 0;"> 
             <div class="banner-wrap">
              <div class="slider-left">
              <img src="images/banner1.jpg" alt=""/> 
            </div>
             <div class="slider-right">
                <h1>Local</h1>
                <h2>Wares</h2>
                <p>Find your local products here</p>
                <div class="btn"><a href="/sandbox/ecommerce/New_folder/tea.php">Darjeeling</a></div>
             </div>
             <div class="clear"></div>
           </div>
            </article>
        </div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                  <li><a href="#" class="">0</a></li>
                  <li><a href="#" class="">1</a></li>
                  <li><a href="#" class="wmuActive">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
               <script src="js/jquery.wmuSlider.js"></script> 
         <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
            <script>
                   $('.example1').wmuSlider();         
              </script>                     
             </div>
             <div class="main">
                <div class="wrap">
           <div class="content-bottom">
           <div class="box1">
            <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/tea.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Darjeeling Tea</h3>
                 <div class="grid_img">
               <div class="css3"><img src="images/pic.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 300</div>
             </div>
              </div>
<!--            <script>
            $(document).ready(function () {
                $("#demo1 .rating-input").click(function () {
               
                    $.post('New_folder/rating.php',{rate:$(this).val()},function(d){
                        if(d == 0)
                        {
                            alert('You already rated');
                        }else{
                            alert('Thanks For Rating');
                        }
                    });
                    $(this).attr("checked");
                });
            });
        </script>
    -->      
             <span class="rating" id='demo1'>
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1" >
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Darjeeling Tea</h3><a href="#"></a></li>
                  <li><p>Darjeeling tea is a tea from the Darjeeling district in West Bengal, India. It is available in black, green, white and oolong.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
            <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/brassproduct.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Darjeeling Brass Artifacts</h3>
              <div class="grid_img">
               <div class="css3"><img src="images/pic1.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 800</div>
             </div>
              </div>
  <!--           <script>
            $(document).ready(function () {
                $("#demo2 .rating-input").click(function () {
               
                    $.post('New_folder/rating.php',{rate:$(this).val()},function(d){
                        if(d == 0)
                        {
                            alert('You already rated');
                        }else{
                            alert('Thanks For Rating');
                        }
                    });
                    $(this).attr("checked");
                });
            });
        </script>
      -->    
             <span class="rating" id="demo2"> 
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Darjeeling Brass Artifacts</h3><a href=""></a></li>
                  <li><p>So what do you shop in Darjeeling? Some popular handmade items include the Tibetan masks, paintings of Bhutia facial expressions on cloth pieces, local jewelry items.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
            <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/bamboobasket.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Darjeeling Bamboo Basket</h3>
                 <div class="grid_img">
               <div class="css3"><img src="images/pic2.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 200</div>
             </div>
              </div>
        <!--     <script>
            $(document).ready(function () {
                $("#demo3 .rating-input").click(function () {
                    $.post('New_folder/rating.php',{rate:$(this).val()},function(d){
                        if(d == 0)
                        {
                            alert('You already rated');
                        }else{
                            alert('Thanks For Rating');
                        }
                    });
                    $(this).attr("checked");
                });
            });
        </script>
     -->
             <span class="rating" id="demo3">
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Darjeeling Bamboo Basket</h3><a href=""></a></li>
                  <li><p>Developed By The Humbled Artician Who Endowed Their Utmost Love And Passian To These Artifacts, Moulding Them Into Vessels Of The Rediant Beauty Of Their Own Simplicity And Selflessness.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
          <div class="clear"></div>
        </div>
        <div class="box1">
          <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/papier.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Srinagar Paper Bowl</h3>
                 <div class="grid_img">
               <div class="css3"><img src="images/pic3.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 400</div>
             </div>
              </div>
        <!--              <script>
            $(document).ready(function () {
                $("#demo4 .rating-input").click(function () {
               
                    $.post('New_folder/rating.php',{rate:$(this).val()},function(d){
                        if(d == 0)
                        {
                            alert('You already rated');
                        }else{
                            alert('Thanks For Rating');
                        }
                    });
                    $(this).attr("checked");
                });
            });
        </script>
     -->
             <span class="rating" demo="4">
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Srinagar Paper Bowl</h3><a href=""></a></li>
                  <li><p>Srinagar is famous for it's culture and artifacts. No, one realise that it is also famous for it's papier products one cannot leave srinagar without buying paier products.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
            <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/shawl.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Srinagar Shawl</h3>
                 <div class="grid_img">
               <div class="css3"><img src="images/pic4.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 2000</div>
             </div>
              </div>
        <!--    <script>
            $(document).ready(function () {
                $("#demo5 .rating-input").click(function () {
               
                    $.post('New_folder/rating.php',{rate:$(this).val()},function(d){
                        if(d == 0)
                        {
                            alert('You already rated');
                        }else{
                            alert('Thanks For Rating');
                        }
                    });
                    $(this).attr("checked");
                });
            });
        </script>
     -->
             <span class="rating" id="demo5">
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5"> 
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Srinagar Shawl</h3><a href=""></a></li>
                  <li><p>One cannot come to Srinagar and not indulge in a bout of shopping for Kashmiri handicrafts craved the world over!</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
           <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/carpet.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Srinagar Carpets</h3>
                 <div class="grid_img">
               <div class="css3"><img src="images/pic5.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 1500</div>
             </div>
              </div>
        <!--  <script>
            $(document).ready(function () {
                $("#demo6 .rating-input").click(function () {
               
                    $.post('New_folder/rating.php',{rate:$(this).val()},function(d){
                        if(d == 0)
                        {
                            alert('You already rated');
                        }else{
                            alert('Thanks For Rating');
                        }
                    });
                    $(this).attr("checked");
                });
            });
        </script>
     -->
             <span class="rating" id="demo6">
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Srinagar Carpets</h3><a href=""></a></li>
                  <li><p>Sultan Zain-ul-Abadin brought carpet weavers from Persia and Central Asia to Kashmir to train the local inhabitants in the art of carpet weaving.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
          <div class="clear"></div>
          </div>
                     <div class="box1">
            <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/moradabadbrassutensils.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Moradabad Brass Utensils</h3>
                 <div class="grid_img">
               <div class="css3"><img src="images/pic7.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 500</div>
             </div>
              </div>

             <span class="rating" id='demo1'>
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1" >
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Moradabad Brass Utensils</h3><a href="#"></a></li>
                  <li><p>Moradabad brass utensils are the best brass utensils.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
            <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/kolkatacoffeecoconut.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Kolkata coffee coconut</h3>
              <div class="grid_img">
               <div class="css3"><img src="images/pic8.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 700</div>
             </div>
              </div>

             <span class="rating" id="demo2"> 
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Kolkata coffee coconut</h3><a href=""></a></li>
                  <li><p>So what do you shop in Darjeeling? Some popular handmade items include the Tibetan masks, paintings of Bhutia facial expressions on cloth pieces, local jewelry items.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
            <div class="col_1_of_3 span_1_of_3"><a href="/sandbox/ecommerce/New_folder/resinwood.php">
             <div class="view view-fifth">
              <div class="top_box">
              <h3 class="m_1">Bareilly Resin WoodWork</h3>
                 <div class="grid_img">
               <div class="css3"><img src="images/pic6.jpg" alt=""/></div>
                    <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                      </div>
                       <div class="price"><i class="fa fa-inr"></i> 1000</div>
             </div>
              </div>

             <span class="rating" id="demo3">
                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" value="1">
                <label for="rating-input-1-5" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" value="2">
                <label for="rating-input-1-4" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" value="3">
                <label for="rating-input-1-3" class="rating-star1"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" value="4">
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" value="5">
                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                
                </span>
             <ul class="list">
              <li>
                <img src="images/plus.png" alt=""/>
                <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="/sandbox/ecommerce/classicware_cart/index.php/shopping">Add To Bag </a>
                <ul class="sub-icon1 list">
                  <li><h3>Bareilly Resin WoodWork</h3><a href=""></a></li>
                  <li><p>Developed By The Humbled Artician Who Endowed Their Utmost Love And Passian To These Artifacts, Moulding Them Into Vessels Of The Rediant Beauty Of Their Own Simplicity And Selflessness.</p></li>
                </ul>
                </li>
               </ul>
               </li>
               </ul>
                <div class="clear"></div>
            </a></div>
          <div class="clear"></div>
        </div>
        </div>
       </div>
        </div>

<?php include('New_folder/includes/footer.php'); ?>
