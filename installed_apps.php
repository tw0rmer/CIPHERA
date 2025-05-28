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
  <title>Installed Applications | Ciphera</title>
  
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
        <h1 class="page-title">Installed Applications</h1>
        
        <!-- Header Card -->
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <i class="fas fa-th"></i>
              All Applications (31)
            </div>
            
            <div class="header-actions">
              <div class="btn btn-secondary">
                <i class="fas fa-sync-alt"></i>
                Get Installed Apps
              </div>
              
              <div class="btn btn-primary">
                <i class="fas fa-search"></i>
                Search
              </div>
            </div>
          </div>
          
          <!-- Apps Grid -->
          <div class="app-grid">
            <!-- Social Media Apps -->
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" alt="Facebook">
              </div>
              <div class="app-name">Facebook</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="Instagram">
              </div>
              <div class="app-name">Instagram</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Twitter-logo.svg/1200px-Twitter-logo.svg.png" alt="Twitter">
              </div>
              <div class="app-name">Twitter</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png" alt="WhatsApp">
              </div>
              <div class="app-name">WhatsApp</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1200px-LINE_logo.svg.png" alt="LINE">
              </div>
              <div class="app-name">LINE</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/1200px-Telegram_2019_Logo.svg.png" alt="Telegram">
              </div>
              <div class="app-name">Telegram</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/1200px-Telegram_logo.svg.png" alt="Snapchat">
              </div>
              <div class="app-name">Snapchat</div>
            </div>
            
            <!-- Browsers and Productivity -->
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Google_Chrome_icon_%28February_2022%29.svg/1200px-Google_Chrome_icon_%28February_2022%29.svg.png" alt="Chrome">
              </div>
              <div class="app-name">Chrome</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/1200px-Gmail_icon_%282020%29.svg.png" alt="Gmail">
              </div>
              <div class="app-name">Gmail</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Google_Maps_2020_icon.svg/1200px-Google_Maps_2020_icon.svg.png" alt="Google Maps">
              </div>
              <div class="app-name">Google Maps</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Google_Photos_icon.svg/1200px-Google_Photos_icon.svg.png" alt="Photos">
              </div>
              <div class="app-name">Photos</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Google_Assistant_logo.svg/1200px-Google_Assistant_logo.svg.png" alt="Assistant">
              </div>
              <div class="app-name">Assistant</div>
            </div>
            
            <!-- Utility Apps -->
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Google_Calendar_icon.svg/1200px-Google_Calendar_icon.svg.png" alt="Calendar">
              </div>
              <div class="app-name">Calendar</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple116/v4/eb/fc/95/ebfc95b5-0a86-ca2a-45b1-77eb4d0fbb0e/AppIcon-0-0-1x_U007emarketing-0-0-0-7-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/1200x630wa.png" alt="Clock">
              </div>
              <div class="app-name">Clock</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://play-lh.googleusercontent.com/KwGCiEolNEeR_MV97IVVm4ixC2uUYJUgfTKiQEpGtQsfGbA8yzIk8SE9bIyLbwdh-TE" alt="Calculator">
              </div>
              <div class="app-name">Calculator</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://play-lh.googleusercontent.com/qvjeayRwXxY0JUNYnFXdMq4URgGhVmFRZRWB1bAoY9DYzgbYJmQrWC1a07hMHirvbTU" alt="Camera">
              </div>
              <div class="app-name">Camera</div>
            </div>
            
            <!-- Entertainment -->
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/1200px-YouTube_full-color_icon_%282017%29.svg.png" alt="YouTube">
              </div>
              <div class="app-name">YouTube</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/1200px-Spotify_logo_without_text.svg.png" alt="Spotify">
              </div>
              <div class="app-name">Spotify</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Netflix_2014_logo.svg/1200px-Netflix_2014_logo.svg.png" alt="Netflix">
              </div>
              <div class="app-name">Netflix</div>
            </div>
            
            <!-- More Apps -->
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Microsoft_Office_OneDrive_%282019%E2%80%93present%29.svg/1200px-Microsoft_Office_OneDrive_%282019%E2%80%93present%29.svg.png" alt="OneDrive">
              </div>
              <div class="app-name">OneDrive</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_Office_Outlook_%282019%E2%80%93present%29.svg/1200px-Microsoft_Office_Outlook_%282019%E2%80%93present%29.svg.png" alt="Outlook">
              </div>
              <div class="app-name">Outlook</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Microsoft_Office_Teams_%282018%E2%80%93present%29.svg/1200px-Microsoft_Office_Teams_%282018%E2%80%93present%29.svg.png" alt="Teams">
              </div>
              <div class="app-name">Teams</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Skype_icon.svg/1200px-Skype_icon.svg.png" alt="Skype">
              </div>
              <div class="app-name">Skype</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Evernote_logo.svg/1200px-Evernote_logo.svg.png" alt="Evernote">
              </div>
              <div class="app-name">Evernote</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Notion_app_logo.png/1200px-Notion_app_logo.png" alt="Notion">
              </div>
              <div class="app-name">Notion</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Dropbox_Icon.svg/1200px-Dropbox_Icon.svg.png" alt="Dropbox">
              </div>
              <div class="app-name">Dropbox</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Signal-Logo.svg/1200px-Signal-Logo.svg.png" alt="Signal">
              </div>
              <div class="app-name">Signal</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Trello_logo.svg/1200px-Trello_logo.svg.png" alt="Trello">
              </div>
              <div class="app-name">Trello</div>
            </div>
            
            <div class="app-item">
              <div class="app-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Stack_Overflow_icon.svg/1200px-Stack_Overflow_icon.svg.png" alt="Stack">
              </div>
              <div class="app-name">Stack</div>
            </div>
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