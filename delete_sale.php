<?php
  require_once('includes/load.php');
  // Check what level of permission the user has to view this page
  page_require_level(3);
  
  // Check if the user has administrator permissions

?>
<?php
  $d_sale = find_by_id('sales',(int)$_GET['id']);
  if(!$d_sale){
    $session->msg("d","Missing sale id.");
    redirect('sales.php');
  }
?>
<?php
  $delete_id = delete_by_id('sales',(int)$d_sale['id']);
  if($delete_id){
      $session->msg("s","Sale deleted.");
      redirect('sales.php');
  } else {
      $session->msg("d","Sale deletion failed.");
      redirect('sales.php');
  }
?>
