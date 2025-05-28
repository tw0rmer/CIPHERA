<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages | Ciphera</title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/layout.css">
  <link rel="stylesheet" href="css/animations.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    .messages-container {
      display: flex;
      height: calc(100vh - 180px);
      background: var(--card-bg);
      border-radius: var(--radius-md);
      border: 1px solid var(--card-border);
      overflow: hidden;
    }
    
    .messages-sidebar {
      width: 280px;
      border-right: 1px solid var(--card-border);
      display: flex;
      flex-direction: column;
    }
    
    .messages-header {
      padding: var(--spacing-md);
      border-bottom: 1px solid var(--card-border);
      display: flex;
      gap: var(--spacing-md);
    }
    
    .messages-search {
      flex: 1;
      position: relative;
    }
    
    .messages-search input {
      width: 100%;
      padding: 8px 32px 8px 12px;
      background: rgba(33, 33, 64, 0.5);
      border: 1px solid var(--card-border);
      border-radius: var(--radius-sm);
      color: var(--text-primary);
    }
    
    .messages-search i {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-muted);
    }
    
    .messages-list {
      flex: 1;
      overflow-y: auto;
    }
    
    .message-contact {
      display: flex;
      align-items: center;
      gap: var(--spacing-md);
      padding: var(--spacing-md);
      cursor: pointer;
      transition: var(--transition-fast);
      border-left: 3px solid transparent;
    }
    
    .message-contact:hover {
      background: rgba(157, 78, 221, 0.1);
    }
    
    .message-contact.active {
      background: rgba(157, 78, 221, 0.15);
      border-left-color: var(--neon-purple);
    }
    
    .contact-info {
      flex: 1;
    }
    
    .contact-name {
      font-weight: 500;
      color: var(--text-primary);
      margin-bottom: 2px;
    }
    
    .contact-preview {
      font-size: 0.875rem;
      color: var(--text-muted);
    }
    
    .message-count {
      background: var(--neon-purple);
      color: var(--text-primary);
      padding: 2px 8px;
      border-radius: 12px;
      font-size: 0.75rem;
    }
    
    .chat-container {
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    
    .chat-header {
      padding: var(--spacing-md);
      border-bottom: 1px solid var(--card-border);
      display: flex;
      align-items: center;
      gap: var(--spacing-md);
    }
    
    .chat-messages {
      flex: 1;
      padding: var(--spacing-md);
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: var(--spacing-md);
    }
    
    .message {
      max-width: 70%;
      padding: var(--spacing-sm) var(--spacing-md);
      border-radius: var(--radius-sm);
      position: relative;
    }
    
    .message.received {
      background: rgba(33, 33, 64, 0.5);
      align-self: flex-start;
      border-bottom-left-radius: 0;
    }
    
    .message.sent {
      background: rgba(157, 78, 221, 0.2);
      align-self: flex-end;
      border-bottom-right-radius: 0;
    }
    
    .message-time {
      font-size: 0.75rem;
      color: var(--text-muted);
      margin-top: 4px;
    }
    
    .chat-input {
      padding: var(--spacing-md);
      border-top: 1px solid var(--card-border);
      display: flex;
      gap: var(--spacing-md);
    }
    
    .chat-input input {
      flex: 1;
      padding: 12px;
      background: rgba(33, 33, 64, 0.5);
      border: 1px solid var(--card-border);
      border-radius: var(--radius-sm);
      color: var(--text-primary);
    }
    
    .chat-input button {
      padding: 0 var(--spacing-md);
      background: var(--neon-purple);
      border: none;
      border-radius: var(--radius-sm);
      color: var(--text-primary);
      cursor: pointer;
      transition: var(--transition-fast);
    }
    
    .chat-input button:hover {
      background: var(--neon-pink);
    }
  </style>
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
        <h1 class="page-title">Messages</h1>
        
        <div class="messages-container">
          <!-- Messages Sidebar -->
          <div class="messages-sidebar">
            <div class="messages-header">
              <div class="messages-search">
                <input type="text" placeholder="Search messages...">
                <i class="fas fa-search"></i>
              </div>
            </div>
            
            <div class="messages-list">
              <div class="message-contact active">
                <div class="avatar">J</div>
                <div class="contact-info">
                  <div class="contact-name">Jacob</div>
                  <div class="contact-preview">Not bad. Got through that math test finally</div>
                </div>
                <div class="message-count">47</div>
              </div>
              
              <div class="message-contact">
                <div class="avatar">E</div>
                <div class="contact-info">
                  <div class="contact-name">Elle</div>
                  <div class="contact-preview">See you tomorrow!</div>
                </div>
                <div class="message-count">8</div>
              </div>
              
              <div class="message-contact">
                <div class="avatar">E</div>
                <div class="contact-info">
                  <div class="contact-name">Ethan</div>
                  <div class="contact-preview">Thanks for the help!</div>
                </div>
                <div class="message-count">6</div>
              </div>
              
              <!-- Add more contacts as needed -->
            </div>
          </div>
          
          <!-- Chat Area -->
          <div class="chat-container">
            <div class="chat-header">
              <div class="avatar">J</div>
              <div class="contact-info">
                <div class="contact-name">Jacob</div>
                <div class="contact-preview">Online</div>
              </div>
            </div>
            
            <div class="chat-messages">
              <div class="message received">
                <div class="message-content">Not bad. Got through that math test finally</div>
                <div class="message-time">10:05 AM</div>
              </div>
              
              <div class="message sent">
                <div class="message-content">Nice! Want to grab some food at the pizza place?</div>
                <div class="message-time">10:07 AM</div>
              </div>
              
              <div class="message sent">
                <div class="message-content">Miss you too. How was your day?</div>
                <div class="message-time">10:10 AM</div>
              </div>
            </div>
            
            <div class="chat-input">
              <input type="text" placeholder="Type a message...">
              <button><i class="fas fa-paper-plane"></i></button>
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