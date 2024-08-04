<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php echo display_msg($msg); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Logistic Sales Management System</h3>
        </div>
        <div class="panel-body text-center">
          <h1>This is your new home page!</h1>
          <p>Just browse around and find out what pages helpful for you.</p>
          <a href="admin.php" class="btn btn-primary btn-lg">Go to Dashboard</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>
