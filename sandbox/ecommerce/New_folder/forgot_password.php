<?php

/**
 * Forgotten password form
 */

// Initialisation
require_once('includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  Auth::getInstance()->sendPasswordReset($_POST['email']);
  $message_sent = true;
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Forgotten password';
include('includes/header.php');

?>


<?php if (isset($message_sent)): ?>
  <p>If we found an account with that email address, we have sent password reset instructions to it. Please check your email.</p>

<?php else: ?>

         <div class="login" style="height:400px">
          <div class="wrap">
        <div class="col_1_of_login span_1_of_login">
          <h4 class="title">New Customers</h4>
          <h5 class="sub_title">Register Account</h5>
          <p>Classicware gives consumers the top traditional items from local cities or country. We aim to connect the world. Every country has their heritage and culture, every country has traditional products and people from other coutry want to buy them and we provide solution for this.</p>
          <div class="button1">
             <a href="/sandbox/ecommerce/New_folder/signup.php"><input type="submit" name="Submit" value="Continue"></a>
           </div>
           <div class="clear"></div>
        </div>
        <div class="col_1_of_login span_1_of_login">
          <div class="login-title">
                <h4 class="title">Forgotten Password</h4>
           <div class="comments-area">

            <form method="post" class="form-signin">
              <p>
                <label for="inputEmail" class="sr-only">Email</label>
                <span>*</span>
                <input id="email" name="email" type="email" required="required" autofocus="autofocus" class="form-control" placeholder="Email address" >
              </p>
              <p>
                <input type="submit" value="Login">
              </p>
            </form>
          </div>
            </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>     
  
<?php endif; ?>

<?php include('includes/footer.php'); ?>
