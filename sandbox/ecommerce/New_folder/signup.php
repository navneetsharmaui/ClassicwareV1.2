<?php

/**
 * Sign up a new user
 */

// Initialisation
require_once('includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $user = User::signup($_POST);

  if (empty($user->errors)) {

    // Redirect to signup success page
    Util::redirect('/sandbox/ecommerce/New_folder/signup_success.php');
  }
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Sign Up';
include('includes/header.php');

?>

<?php if (isset($user)): ?>
  <ul>
    <?php foreach ($user->errors as $error): ?>
      <li><?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

 <div class="login" style="height:400px">
    <div class="wrap">
  <div class="col_1_of_login span_1_of_login">
    <h4 class="title">New Customers</h4>
    <p>Classicware gives consumers the top traditional items from local cities or country. We aim to connect the world. Every country has their heritage and culture, every country has traditional products and people from other coutry want to buy them and we provide solution for this.</p>
    <p>If already registered on the website then continue to login page.</p>
    <div class="button1">
       <a href="/sandbox/ecommerce/New_folder/login.php"><input type="submit" name="Submit" value="Continue"></a>
     </div>
     <div class="clear"></div>
  </div>
  <div class="col_1_of_login span_1_of_login">
    <div class="login-title">
          <h4 class="title">SignUp Customers here</h4>
     <div class="comments-area">

      <form method="post" class="form-signin">
        <p>
          <label for="name" class="sr-only">Name</label>
          <span>*</span>
          <input id="name" name="name" value="<?php echo isset($user) ? htmlspecialchars($user->name) : ''; ?>" type="text" autofocus="autofocus" required="required" class="form-control" placeholder="Name" >
        </p>
        <p>
          <label for="inputEmail" class="sr-only">Email</label>
          <span>*</span>
          <input id="email" name="email" required="required" type="email" value="<?php echo isset($user) ? htmlspecialchars($user->email) : ''; ?>" type="email" required="required" class="form-control" placeholder="Email address" >
        </p>
        <p>
          <label for="inputPassword" class="sr-only">Password</label>
          <span>*</span>
          <input type="password" id="password" name="password" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="minimum 8 characters" class="form-control" placeholder="Password">
        </p>
        <p>
          <input type="submit" value="SignUp">
        </p>
      </form>
    </div>
      </div>
  </div>
  <div class="clear"></div>
</div>
</div>     

<?php include('includes/footer.php'); ?>
