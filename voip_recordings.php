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
  <title>VoIP Recordings | Ciphera</title>
  
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
        <h1 class="page-title">VoIP Recordings</h1>
        
        <!-- VoIP Recordings Card -->
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <i class="fas fa-microphone"></i>
              VoIP Recordings
            </div>
            
            <!-- Filter Options -->
            <div class="filter-options">
              <button class="btn btn-secondary active">
                <i class="fas fa-list"></i>
                All
              </button>
              <button class="btn btn-secondary">
                <i class="fas fa-star"></i>
                Starred
              </button>
              <button class="btn btn-secondary">
                <i class="fas fa-arrow-down"></i>
                Incoming
              </button>
              <button class="btn btn-secondary">
                <i class="fas fa-arrow-up"></i>
                Outgoing
              </button>
            </div>
          </div>
          
          <!-- VoIP Recordings Table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Contact</th>
                  <th>Duration</th>
                  <th>Date and Time</th>
                  <th>Download</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i class="fas fa-trash-alt text-muted"></i></td>
                  <td><i class="far fa-star text-muted"></i></td>
                  <td>
                    <div class="contact-info">
                      <img src="https://i.pravatar.cc/32?img=1" alt="Matt" class="avatar avatar-sm">
                      <span>Matt</span>
                    </div>
                  </td>
                  <td>00:00:48</td>
                  <td>Feb 1, 2020, 22:34</td>
                  <td>
                    <button class="btn btn-secondary btn-sm">
                      <i class="fas fa-download"></i>
                      Download
                    </button>
                  </td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
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