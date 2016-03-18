<?php

/**
 * Profile
 */

// Initialisation
require_once('includes/init.php');

// Require the user to be logged in before they can see this page.
Auth::getInstance()->requireLogin();

// Set the title, show the page header, then the rest of the HTML
$page_title = 'BambooBasket Details';
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
						<li data-thumb="/sandbox/ecommerce/images/bamboopro1.jpg">
							<div class="thumb-image"> <img src="/sandbox/ecommerce/images/bamboopro1.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="/sandbox/ecommerce/images/bamboopro2.jpg">
							 <div class="thumb-image"> <img src="/sandbox/ecommerce/images/bamboopro2.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="/sandbox/ecommerce/images/bamboopro4.jpg">
						   <div class="thumb-image"> <img src="/sandbox/ecommerce/images/bamboopro4.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="/sandbox/ecommerce/images/bamboopro3.jpg">
						   <div class="thumb-image"> <img src="/sandbox/ecommerce/images/bamboopro3.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					  </ul>
					<div class="clearfix"></div>
			</div>		

		</div>
	<div class="cont1 span_2_of_a1">
		<h3 class="m_3">Darjeeling Bamboo Basket</h3>
		
		<div class="price_single">
					  <span class="reducedfrom"><i class="fa fa-inr"></i> 450.00</span>
					  <span class="actual"><i class="fa fa-inr"></i> 200.00</span>
					</div>
		<div class="btn_form">
		   <form>
			 <a href="/sandbox/ecommerce/classicware_cart/index.php/shopping" target="_blank"><button><input type="submit" value="buy now" title="Add to cart"></button></a>
		  </form>
		</div>
		<p class="m_desc">Developed By The Humbled Artician Who Endowed Their Utmost Love And Passian To These Artifacts, Moulding Them Into Vessels Of The Rediant Beauty Of Their Own Simplicity And Selflessness.</p>
		
        <div class="social_single">	
		   <ul>	
			  <li class="fb"><a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site http://www.classicware.netai.net/sandbox/ecommerce/"
   title="Share by Email"><span> </span></a></li>
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
	<p class="m_text">Developed By The Humbled Artician Who Endowed Their Utmost Love And Passian To These Artifacts, Moulding Them Into Vessels Of The Rediant Beauty Of Their Own Simplicity And Selflessness.</p>
</div>					
<div class="toogle">
	<h3 class="m_3">Product Reviews</h3>
	<p class="m_text">“good place for buying bamboo baskets”</p>
	<p class="m_text">One cannot leave this site without buying the bamboo baskets. They are aof very good quality.</p>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<?php include('includes/footer.php'); ?>
