<?php

/**
 * Reset password form
 */

// Initialisation
require_once('includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();


// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $user = User::findForPasswordReset($_POST['token']);

  if ($user !== null) {

    $user->password = $_POST['password'];
    $user->password_confirmation = $_POST['password_confirmation'];

    if ($user->resetPassword()) {

      // Redirect to success page
      Util::redirect('/sandbox/ecommerce/New_folder/reset_password_success.php');
    }
  }

} else {  // GET

  // Find the user based on the token
  if (isset($_GET['token'])) {
    $user = User::findForPasswordReset($_GET['token']);
  }
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Reset password';
include('includes/header.php');

?>


<?php if (isset($user)): ?>

  <?php if ( ! empty($user->errors)): ?>
    <ul>
      <?php foreach ($user->errors as $error): ?>
        <li><?php echo $error; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>


         <div class="login" style="height:400px">
          <div class="wrap">
        <div class="col_1_of_login span_1_of_login">
          <h4 class="title">Ooops! Forgot Password</h4>
          <h5 class="sub_title">Don't worry</h5>
          <p>We are here to help you out. Just request the reset password.</p>
          <div class="button1">
             <a href="/sandbox/ecommerce/New_folder/signup.php"><input type="submit" name="Submit" value="Continue"></a>
           </div>
           <div class="clear"></div>
        </div>
        <div class="col_1_of_login span_1_of_login">
          <div class="login-title">
                <h4 class="title">Reset Password</h4>
           <div class="comments-area">

            <form form method="post" id="resetPasswordForm" class="form-signin">
              <p>
                <input type="hidden" id="token" name="token" value="<?php echo $_GET['token']; ?>" class="form-control">
              </p>
              <p>
                <label for="inputPassword" class="sr-only">Password</label>
                <span>*</span>
                <input type="password" id="password" name="password" required="required" autofocus="autofocus" class="form-control" placeholder="Password">
              </p>
              <p>
                <label for="inputPassword" class="sr-only">New Password</label>
                <span>*</span>
                <input type="password" id="password_confirmation" name="password_confirmation" required="required" class="form-control" placeholder="New Password">
              </p>
              <p>
                <input type="submit" value="Reset Password">
              </p>
            </form>
          </div>
            </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>     

<?php else: ?>

  <p>Reset token not found or expired. Please <a href="forgot_password.php">try resetting your password again</a>.</p>
  
<?php endif; ?>

<?php include('includes/footer.php'); ?>
