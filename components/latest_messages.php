<div class="card">
  <div class="card-header">
    <h2 class="card-title">
      <i class="fas fa-sms"></i> 
      Latest Messages
    </h2>
    <a href="messages.php" class="activity-more">
      More <i class="fas fa-chevron-right"></i>
    </a>
  </div>
  
  <div class="card-body">
    <div class="activity-list">
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(0, 246, 255, 0.1); color: var(--neon-blue);">
          <span>J</span>
        </div>
        <div class="activity-content">
          <div class="activity-title">John</div>
          <div class="activity-message">"Hey, are we still meeting today at 5?"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-10 minutes')); ?>">10 mins ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 44, 240, 0.1); color: var(--neon-pink);">
          <span>S</span>
        </div>
        <div class="activity-content">
          <div class="activity-title">Sarah</div>
          <div class="activity-message">"Thanks for the update!"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-25 minutes')); ?>">25 mins ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(4, 231, 98, 0.1); color: var(--neon-green);">
          <span>D</span>
        </div>
        <div class="activity-content">
          <div class="activity-title">David</div>
          <div class="activity-message">"I'll send you the files later today"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-6 hours')); ?>">6 hours ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 179, 71, 0.1); color: var(--warning);">
          <span>M</span>
        </div>
        <div class="activity-content">
          <div class="activity-title">Mom</div>
          <div class="activity-message">"Don't forget to call grandma tonight!"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-8 hours')); ?>">8 hours ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 44, 240, 0.1); color: var(--neon-pink);">
          <span>E</span>
        </div>
        <div class="activity-content">
          <div class="activity-title">Emma</div>
          <div class="activity-message">"When are you coming home tonight?"</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-1 day')); ?>">Yesterday</div>
        </div>
      </div>
    </div>
  </div>
</div>