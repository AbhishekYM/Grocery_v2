<?php
// include('/var/www/html/Grocery/Database/Connection.php');
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// Create a new instance of the DatabaseConnection class
$db = new DatabaseConnection();
// Get the mysqli connection object
$con = $db->getConnection();
session_start();
if (!isset($_SESSION['name'])) {
  header('location:/Grocery/html/Admin/Login.php');
}
?>
<script src="/var/www/html/Grocery/js/admin.js"></script>
<link rel="stylesheet" href="/Grocery/CSS/admin.css">
<link rel="stylesheet" href="/Grocery/CSS/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/Grocery/CSS/fontawesome-free-6.3.0-web/css/all.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> -->
<!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
<link rel="stylesheet" href="/Grocery/CSS/boxicons-2.0.7/css/boxicons.min.css">
<div class="sidebar">
  <div class="logo-details">
    <i class='fa fa-shopping-basket'></i>
    <span class="logo_name">GOCO</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="admin.php" class="active">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="/Grocery/html/Admin/Product/InsertProduct.php">
        <i class='bx bx-box'></i>
        <span class="links_name">Product</span>
      </a>
    </li>
    <li>
      <a href="InsertCategories.php">
        <i class='bx bx-list-ul'></i>
        <span class="links_name">Categories</span>
      </a>
    </li>
    <li>
      <a href="/Grocery/html/Admin/Feature/InsertFeature.php">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Features</span>
      </a>
    </li>
    <li>
      <a href="Review.php">
        <i class='bx bx-coin-stack'></i>
        <span class="links_name">Reviews</span>
      </a>
    </li>
    <li>
      <a href="/Grocery/html/Admin/Blog/InsertBlog.php">
        <i class='bx bx-book-alt'></i>
        <span class="links_name">Blogs</span>
      </a>
    </li>
    <li>
      <a href="/Grocery/html/Admin/Team/Team.php">
        <i class='bx bx-user'></i>
        <span class="links_name">Team</span>
      </a>
    </li>

    <li class="log_out">
      <a href="/Grocery/App/AddAdmin/Logout.php">
        <i class='bx bx-log-out'></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard">Dashboard</span>
    </div>
    <div class="search-box">
      <input type="text" placeholder="Search...">
      <i class='bx bx-search'></i>
    </div>
    <div class="profile-details">
      <!--<img src="images/profile.jpg" alt="">-->
      <span class="admin_name">
        <?php echo $_SESSION['name'] ?>
      </span>
      <i class='bx bx-chevron-down'></i>
    </div>
  </nav>