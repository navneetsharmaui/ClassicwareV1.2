<?php

/**
 * Log in a user
 */

// Initialisation
require_once('includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Get checked status of the "remember me" checkbox
$remember_me = isset($_POST['remember_me']);

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];

  if (Auth::getInstance()->login($email, $_POST['password'], $remember_me)) {

    // Redirect to home page or intended page, if set
    if (isset($_SESSION['return_to'])) {
      $url = $_SESSION['return_to'];
      unset($_SESSION['return_to']);
    } else {
      $url = '/sandbox/ecommerce/index.php';
    }

    Util::redirect($url);
  }
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Login';
include('includes/header.php');

?>


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
                <h4 class="title">Registered Customers</h4>
           <div class="comments-area">
                    <?php if (isset($email)): ?>
                      <span class="label label-danger">Invalid login</span>
                    <?php endif; ?>

            <form method="post" class="form-signin">
              <p>
                <label for="inputEmail" class="sr-only">Email</label>
                <span>*</span>
                <input id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" type="email" autofocus="autofocus" required="required" class="form-control" placeholder="Email address" >
              </p>
              <p>
                <label for="inputPassword" class="sr-only">Password</label>
                <span>*</span>
                <input type="password" id="password" name="password" required="required" class="form-control" placeholder="Password">
              </p>
              <p id="login-form-remember">
                <label><input id="remember_me" name="remember_me" type="checkbox" value="1"
               <?php if ($remember_me): ?>checked="checked"<?php endif; ?>/> remember me </label>
              </p>
              <p id="login-form-remember">
                <label><a href="/sandbox/ecommerce/New_folder/forgot_password.php">  Forget Your Password ? </a></label>
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
  
<?php include('includes/footer.php'); ?>
