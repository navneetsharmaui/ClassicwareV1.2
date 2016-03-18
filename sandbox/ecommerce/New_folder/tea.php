<?php

/**
 * Profile
 */

// Initialisation
require_once('includes/init.php');

// Require the user to be logged in before they can see this page.
Auth::getInstance()->requireLogin();

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Tea Details';
include('includes/header.php');

?>




<div class="single">
 <div class="wrap">
	    <div class="rsidebar span_1_of_left">
		   <section  class="sky-form">
           	  <h4>Occasion</h4>
				<div class="row row1 scroll-pane">
					<div class="col col-4">
						<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Valentines</label>
					</div>
					<div class="col col-4">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>New Year</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diwali</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Eid</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Christmas</label>
				    </div>
				 </div>
           	  <h4>Category</h4>
				<div class="row row1 scroll-pane">
					<div class="col col-4">
						<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Artifacts</label>
					</div>
					<div class="col col-4">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shawls</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Carpets</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tea</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Baskets</label>
				    </div>
				</div>
		  </section>
</div>
<div class="cont span_2_of_3">
	  <div class="labout span_1_of_a1">
			<div class="flexslider">
					  <ul class="slides">
						<li data-thumb="/sandbox/ecommerce/images/tea1.jpg">
							<div class="thumb-image"> <img src="/sandbox/ecommerce/images/tea1.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="/sandbox/ecommerce/images/tea2.jpg">
							 <div class="thumb-image"> <img src="/sandbox/ecommerce/images/tea2.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="/sandbox/ecommerce/images/tea4.jpg">
						   <div class="thumb-image"> <img src="/sandbox/ecommerce/images/tea4.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="/sandbox/ecommerce/images/tea3.jpg">
						   <div class="thumb-image"> <img src="/sandbox/ecommerce/images/tea3.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					  </ul>
					<div class="clearfix"></div>
			</div>		

		</div>
	<div class="cont1 span_2_of_a1">
		<h3 class="m_3">Darjeeling Tea</h3>
		
		<div class="price_single">
					  <span class="reducedfrom"><i class="fa fa-inr"></i> 650.00</span>
					  <span class="actual"><i class="fa fa-inr"></i> 300.00</span>
					</div>
		<div class="btn_form">
		   <form>
			 <a href="/sandbox/ecommerce/classicware_cart/index.php/shopping" target="_blank"><input type="submit" value="buy now" title="Add to cart"></a>
		  </form>
		</div>
		<p class="m_desc">Darjeeling tea is a tea from the Darjeeling district in West Bengal, India. It is available in black, green, white and oolong. When properly brewed, it yields a thin-bodied, light-coloured infusion with a floral aroma. The flavour can include a tinge of astringent tannic characteristics and a musky spiciness sometimes described as "muscatel".</p>
		
        <div class="social_single">	
		   <ul>	
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
				<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
				<a class="a2a_button_facebook"></a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_google_plus"></a>
				</div>
				<script async src="https://static.addtoany.com/menu/page.js"></script>

		   </ul>
	    </div>
	</div>
	<div class="clear"></div>


 <ul id="flexiselDemo3">
	<li><img src="/sandbox/ecommerce/images/pic.jpg" /><div class="grid-flex"><a href="#">Tea</a><p><i class="fa fa-inr"></i> 350</p></div></li>
	<li><img src="/sandbox/ecommerce/images/pic1.jpg" /><div class="grid-flex"><a href="#">Artifact</a><p><i class="fa fa-inr"></i> 350</p></div></li>
	<li><img src="/sandbox/ecommerce/images/pic2.jpg" /><div class="grid-flex"><a href="#">Bamboo basket</a><p><i class="fa fa-inr"></i> 350</p></div></li>
	<li><img src="/sandbox/ecommerce/images/pic3.jpg" /><div class="grid-flex"><a href="#">Papier bowl</a><p><i class="fa fa-inr"></i> 350</p></div></li>
	<li><img src="/sandbox/ecommerce/images/pic4.jpg" /><div class="grid-flex"><a href="#">Shawl</a><p><i class="fa fa-inr"></i> 350</p></div></li>
	<li><img src="/sandbox/ecommerce/images/pic5.jpg" /><div class="grid-flex"><a href="#">Carpet</a><p><i class="fa fa-inr"></i> 350</p></div></li>
 </ul>
<script type="text/javascript">
 $(window).load(function() {
	$("#flexiselDemo1").flexisel();
	$("#flexiselDemo2").flexisel({
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });

	$("#flexiselDemo3").flexisel({
		visibleItems: 5,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });
    
});
</script>
<script type="text/javascript" src="/sandbox/ecommerce/js/jquery.flexisel.js"></script>
<div class="toogle">
	<h3 class="m_3">Product Details</h3>
	<p class="m_text">Darjeeling tea is a tea from the Darjeeling district in West Bengal, India. It is available in black, green, white and oolong. When properly brewed, it yields a thin-bodied, light-coloured infusion with a floral aroma. The flavour can include a tinge of astringent tannic characteristics and a musky spiciness sometimes described as "muscatel".</p>
    <p class="m_text">Unlike most Indian teas, Darjeeling tea is normally made from the small-leaved Chinese variety of Camellia sinensis var. sinensis, rather than the large-leaved Assam plant (C. sinensis var. assamica). Traditionally, Darjeeling tea is made as black tea; however, Darjeeling oolong and green teas are becoming more commonly produced and easier to find, and a growing number of estates are also producing white teas. After the enactment of Geographical Indications of Goods (Registration & Protection Act, 1999) in 2003, Darjeeling tea became the first Indian product to receive a GI tag, in 2004-05 through the Indian Patent Office.</p>
</div>					
<div class="toogle">
	<h3 class="m_3">Product Reviews</h3>
	<p class="m_text">“good place for buying tea”</p>
	<p class="m_text">you can taste a tea and then buy it from here. i really liked this concept. the owner really educates you on different types of tea (green/ black etc.). also got to know about the different tea estates owned by goodricke like castleton, margarets hope, longview etc. bought some tea as gift. everybody has praised the same. at least there is no chance of getting conned here. most of the other stores sell darjeeling tea of dubious quality.</p>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<?php include('includes/footer.php'); ?>
