<?php
$page_title = 'Sale Report';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h4>Generate Sale Report</h4>
      </div>
      <div class="panel-body">
        <form id="reportForm" class="clearfix" method="post" action="sale_report_process.php">
          <div class="form-group">
            <label class="form-label">Date Range</label>
            <div class="input-group">
              <input type="text" class="datepicker form-control" name="start-date" placeholder="From">
              <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
              <input type="text" class="datepicker form-control" name="end-date" placeholder="To">
            </div>
          </div>
          <div class="form-group">
            <button id="generateBtn" type="submit" name="submit" class="btn btn-primary">Generate Report</button>
          </div>
        </form>
        <div id="loadingIndicator" style="display: none;">
          <!-- Add your loading indicator here (e.g., spinner or message) -->
          <p>Loading...</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>

<script>
  $(document).ready(function() {
    $('#reportForm').on('submit', function() {
      $('#loadingIndicator').show(); // Show loading indicator when form is submitted
    });
  });
</script>