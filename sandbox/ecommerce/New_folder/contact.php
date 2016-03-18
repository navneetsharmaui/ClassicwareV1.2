<?php

/**
 * Profile
 */

// Initialisation
require_once('../New_folder/includes/init.php');

// Require the user to be logged in before they can see this page.

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Contact';
include('../New_folder/includes/contactheader.php');

?>

			<!----contact---->
			    <div id='browser'>
  <div id='browser-bar'>
    <p>Contact Us</p>
  </div>
  <div id='content'>
    <div id='left'>
      <div id='map'>
        <p>Where To Find Us</p>
        <div class='map-locator'>
          <div class='tooltip'>
            <ul>
              <li>
                <span class='entypo-location'></span>
                <span class='selectedLocation'>India</span>
              </li>
              <li>
                <span class='entypo-mail'></span>
                <a href='#'>theclassicwares@gmail.com</a>
              </li>
              <li>
                <span class='entypo-phone'></span>
                (+91) 8560 8560 80
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul id='location-bar'>
        <li>
          <a class='location' data-location='India' href='http://f.cl.ly/items/452R3S1440221Z3m372j/israel.png'>India</a>
        </li>
      </ul>
    </div>
    <div id='right'>
      <p>Connect</p>
      <div id='social'>
        <a class='social'>
          <span class='entypo-facebook'></span>
        </a>
        <a class='social'>
          <span class='entypo-twitter'></span>
        </a>
        <a class='social'>
          <span class='entypo-linkedin'></span>
        </a>
        <a class='social'>
          <span class='entypo-gplus'></span>
        </a>
      </div>
      <br />
      <p>other way</p>
      <p class='other entypo-mail'>
        <a href='#'>theclassicwares@gmail.com</a>
      </p>
      <p class='other entypo-phone'>(+91) 8560 8560 80</p>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>
			<!---//contact---->
<?php include('../New_folder/includes/footer.php'); ?>
