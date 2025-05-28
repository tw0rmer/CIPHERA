<div class="card">
  <div class="card-header">
    <h2 class="card-title">
      <i class="fas fa-phone-alt"></i> 
      Latest Calls
    </h2>
    <a href="call_log.php" class="activity-more">
      More <i class="fas fa-chevron-right"></i>
    </a>
  </div>
  
  <div class="card-body">
    <div class="activity-list">
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(4, 231, 98, 0.1); color: var(--neon-green);">
          <i class="fas fa-phone-alt"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">+1 (514) 555-0123</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-7 minutes')); ?>">7 mins ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 44, 240, 0.1); color: var(--neon-pink);">
          <i class="fas fa-phone-alt"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">+1 (514) 555-0456</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-20 minutes')); ?>">20 mins ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-phone-slash"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">+1 (514) 555-0789</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-6 hours')); ?>">6 hours ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(4, 231, 98, 0.1); color: var(--neon-green);">
          <i class="fas fa-phone-alt"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">+1 (514) 555-0231</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-7 hours')); ?>">7 hours ago</div>
        </div>
      </div>
      
      <div class="activity-item">
        <div class="activity-icon" style="background: rgba(255, 44, 240, 0.1); color: var(--neon-pink);">
          <i class="fas fa-phone-alt"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">+1 (514) 555-0567</div>
          <div class="activity-time" data-timestamp="<?php echo date('Y-m-d H:i:s', strtotime('-1 day')); ?>">Yesterday</div>
        </div>
      </div>
    </div>
  </div>
</div>