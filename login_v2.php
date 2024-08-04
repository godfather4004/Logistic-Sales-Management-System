<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
          <link rel="stylesheet" href="STYLE.CSS">
<style>
.login-page{
  border:1px solid blue;
   margin-left:265px;
}
  </style>
<div class="container "> <!-- Add mx-auto class to center horizontally -->
    <div class="login-page">
        <div class="text-center">
        <div style="display:flex; align-items:center; justify-content:center;"></div>
        <h2><i class="form-group"></i> Login</h2>
       
         </div>
         <?php echo display_msg($msg); ?>
          <form method="post" action="auth.php" class="clearfix">
            <div class="form-group">
                  <label for="username" class="control-label">Username</label>
                  <input type="name" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="Password" class="control-label">Password</label>
                <input type="Password" name= "Password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group text-center"> <!-- Center the button -->
                <button type="submit" class="btn btn-info">Login</button>
</div><div><div class="text-center">
                <p class="message">Not registered? <a href="add_user">Create an account</a></p></div>
</div>
            </div>
        </form>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
