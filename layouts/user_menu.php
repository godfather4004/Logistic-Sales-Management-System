<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/bootstrap.css">
  <title>Navigation Menu</title>
  <style>
    .submenu {
      display: none;
    }
    .submenu-toggle.active + .submenu {
      display: block;
    }
  </style>
</head>
<body>
  <ul>
    <li>
      <a href="home.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="#" class="submenu-toggle">
        <!-- <i class="glyphicon glyphicon-th-list"></i> -->
        <!-- <span>Sales</span> -->
      </a>
        <!-- <li><a href="sales.php">Manage Sales</a></li>
        <li><a href="add_sale.php">Add Sale</a></li> -->
        
        <a href="sales.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>Manage Sales</span>
      </a>
      <a href="add_sale.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>Add Sales</span>
      </a>
    </li>
    <li>
      <a href="#" class="submenu-toggle">
        <!-- <i class="glyphicon glyphicon-signal"></i> -->
        <!-- <span>Sales Report</span> -->
      </a>
      <!-- <ul class="nav submenu"> -->
        <ul>

        <a href="sales_report.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>Sales by dates</span>
      </a>
      <a href="monthly_sales.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>Monthly Sales</span>
      </a>
      <a href="daily_sales.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>Daily Sales</span>
      </a>

        <!-- <li><a href="sales_report.php">Sales by dates</a></li>
        <li><a href="monthly_sales.php">Monthly sales</a></li>
        <li><a href="daily_sales.php">Daily sales</a></li> -->
      </ul>
    </li>
  </ul>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.submenu-toggle').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).next('.submenu').slideToggle();
      });
    });
  </script>
</body>
</html>
