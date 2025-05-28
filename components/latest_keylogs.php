<div class="card">
  <div class="card-header">
    <h2 class="card-title">
      <i class="fas fa-keyboard"></i> 
      Latest Keylogs
    </h2>
    <a href="key_logs.php" class="activity-more">
      More <i class="fas fa-chevron-right"></i>
    </a>
  </div>
  
  <div class="card-body">
    <div class="activity-list">
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(157, 78, 221, 0.1); color: var(--neon-purple);">
          <i class="fab fa-chrome"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">Chrome - facebook.com</div>
          <div class="activity-message">"Hello, how are you?"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-6 minutes')); ?>">6 mins ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(0, 246, 255, 0.1); color: var(--neon-blue);">
          <i class="fas fa-comment-alt"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">Messages - iMessage</div>
          <div class="activity-message">"See you tomorrow!"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-15 minutes')); ?>">15 mins ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 44, 240, 0.1); color: var(--neon-pink);">
          <i class="fab fa-instagram"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">Instagram - DM</div>
          <div class="activity-message">"I'll check it out later"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-35 minutes')); ?>">35 mins ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 44, 240, 0.1); color: var(--warning);">
          <i class="fab fa-twitter"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">Twitter - Search</div>
          <div class="activity-message">"latest news tech"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-7 hours')); ?>">7 hours ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 44, 240, 0.1); color: var(--neon-blue);">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">Gmail - Compose</div>
          <div class="activity-message">"Meeting agenda for..."</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-1 day')); ?>">Yesterday</div>
        </div>
      </div>
    </div>
  </div>
</div>