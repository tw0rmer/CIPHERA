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
  <title>Key Logs | Ciphera</title>
  
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
        <h1 class="page-title">Key Log Activity</h1>
        
        <!-- Key Log Cards -->
        <div class="card-grid">
          <!-- LINE -->
          <div class="card keylog-card">
            <div class="keylog-app">
              <div class="keylog-app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1200px-LINE_logo.svg.png" alt="LINE">
              </div>
              <div class="keylog-app-name">LINE</div>
              <div class="keylog-count">4 new logs</div>
            </div>
            
            <div class="keylog-content">
              "I tried it to set it to power and longpress the button, but still absolutely no response as if it's all dead..."
            </div>
            
            <div class="keylog-time">2 mins ago</div>
            
            <a href="#" class="activity-more view-more">
              View More <i class="fas fa-chevron-right"></i>
            </a>
          </div>
          
          <!-- Chrome -->
          <div class="card keylog-card">
            <div class="keylog-app">
              <div class="keylog-app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Google_Chrome_icon_%28February_2022%29.svg/1200px-Google_Chrome_icon_%28February_2022%29.svg.png" alt="Chrome">
              </div>
              <div class="keylog-app-name">Chrome</div>
              <div class="keylog-count">6 new logs</div>
            </div>
            
            <div class="keylog-content">
              "I havent using RJH1, Turkey bomb 5 drive families into caves. THE little town of bethlehem..."
            </div>
            
            <div class="keylog-time">15 mins ago</div>
            
            <a href="#" class="activity-more view-more">
              View More <i class="fas fa-chevron-right"></i>
            </a>
          </div>
          
          <!-- WhatsApp -->
          <div class="card keylog-card">
            <div class="keylog-app">
              <div class="keylog-app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png" alt="WhatsApp">
              </div>
              <div class="keylog-app-name">WhatsApp</div>
              <div class="keylog-count">2 new logs</div>
            </div>
            
            <div class="keylog-content">
              "How to use Opera, howlocalicwhatsapp howwwwtooooo"
            </div>
            
            <div class="keylog-time">30 mins ago</div>
            
            <a href="#" class="activity-more view-more">
              View More <i class="fas fa-chevron-right"></i>
            </a>
          </div>
          
          <!-- Gmail -->
          <div class="card keylog-card">
            <div class="keylog-app">
              <div class="keylog-app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/1200px-Gmail_icon_%282020%29.svg.png" alt="Gmail">
              </div>
              <div class="keylog-app-name">Gmail</div>
              <div class="keylog-count">3 new logs</div>
            </div>
            
            <div class="keylog-content">
              "Subject: Project Update\n\nHi Team,\n\nI wanted to share some updates on the current project. We're making good progress..."
            </div>
            
            <div class="keylog-time">2 hours ago</div>
            
            <a href="#" class="activity-more view-more">
              View More <i class="fas fa-chevron-right"></i>
            </a>
          </div>
          
          <!-- Instagram -->
          <div class="card keylog-card">
            <div class="keylog-app">
              <div class="keylog-app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="Instagram">
              </div>
              <div class="keylog-app-name">Instagram</div>
              <div class="keylog-count">5 new logs</div>
            </div>
            
            <div class="keylog-content">
              "Love this photo! Where was this taken? It looks amazing."
            </div>
            
            <div class="keylog-time">3 hours ago</div>
            
            <a href="#" class="activity-more view-more">
              View More <i class="fas fa-chevron-right"></i>
            </a>
          </div>
          
          <!-- Facebook -->
          <div class="card keylog-card">
            <div class="keylog-app">
              <div class="keylog-app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" alt="Facebook">
              </div>
              <div class="keylog-app-name">Facebook</div>
              <div class="keylog-count">1 new log</div>
            </div>
            
            <div class="keylog-content">
              "Happy birthday! Hope you have an amazing day."
            </div>
            
            <div class="keylog-time">5 hours ago</div>
            
            <a href="#" class="activity-more view-more">
              View More <i class="fas fa-chevron-right"></i>
            </a>
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