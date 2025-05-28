// Card functionality for Ciphera Dashboard

class Cards {
  constructor() {
    this.cards = document.querySelectorAll('.card');
    this.init();
  }
  
  init() {
    this.setupCardAnimations();
    this.setupTimeUpdates();
    this.setupHoverEffects();
    this.initDeviceInfoCards();
    this.initKeylogCards();
    this.initAppGrid();
  }
  
  setupCardAnimations() {
    // Add staggered animation to cards
    this.cards.forEach((card, index) => {
      card.style.animationDelay = `${index * 0.1}s`;
      card.classList.add('fade-in');
    });
  }
  
  setupTimeUpdates() {
    // Update relative times in activity items
    const timeElements = document.querySelectorAll('.activity-time');
    if (timeElements.length > 0) {
      this.updateRelativeTimes(timeElements);
      // Update times every minute
      setInterval(() => this.updateRelativeTimes(timeElements), 60000);
    }
  }
  
  updateRelativeTimes(elements) {
    elements.forEach(el => {
      const timestamp = el.getAttribute('data-timestamp');
      if (timestamp) {
        el.textContent = this.formatRelativeTime(timestamp);
      }
    });
  }
  
  formatRelativeTime(timestamp) {
    const now = new Date();
    const date = new Date(timestamp);
    const seconds = Math.floor((now - date) / 1000);
    
    if (seconds < 60) return `${seconds} seconds ago`;
    
    const minutes = Math.floor(seconds / 60);
    if (minutes < 60) return `${minutes} minute${minutes !== 1 ? 's' : ''} ago`;
    
    const hours = Math.floor(minutes / 60);
    if (hours < 24) return `${hours} hour${hours !== 1 ? 's' : ''} ago`;
    
    const days = Math.floor(hours / 24);
    if (days < 7) return `${days} day${days !== 1 ? 's' : ''} ago`;
    
    if (days < 30) return `${Math.floor(days / 7)} week${Math.floor(days / 7) !== 1 ? 's' : ''} ago`;
    
    return date.toLocaleDateString();
  }
  
  setupHoverEffects() {
    // Add hover effects to cards
    this.cards.forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.classList.add('hover');
      });
      
      card.addEventListener('mouseleave', () => {
        card.classList.remove('hover');
      });
    });
    
    // Add hover effects to activity items
    const activityItems = document.querySelectorAll('.activity-item');
    activityItems.forEach(item => {
      item.addEventListener('mouseenter', () => {
        item.classList.add('hover');
      });
      
      item.addEventListener('mouseleave', () => {
        item.classList.remove('hover');
      });
    });
  }
  
  initDeviceInfoCards() {
    // Add any special functionality for device info cards
    const deviceInfoCard = document.querySelector('.device-info-card');
    if (deviceInfoCard) {
      const statusIndicator = deviceInfoCard.querySelector('.status-indicator');
      if (statusIndicator) {
        // Add pulsing animation to online status
        const statusDot = statusIndicator.querySelector('.status-dot');
        if (statusDot && statusDot.classList.contains('online')) {
          statusDot.classList.add('pulse');
        }
      }
    }
  }
  
  initKeylogCards() {
    // Initialize keylog cards
    const keylogCards = document.querySelectorAll('.keylog-card');
    keylogCards.forEach(card => {
      const viewMoreBtn = card.querySelector('.view-more');
      const content = card.querySelector('.keylog-content');
      
      if (viewMoreBtn && content) {
        // Save original height
        const originalHeight = content.style.maxHeight;
        
        viewMoreBtn.addEventListener('click', () => {
          if (content.style.maxHeight === 'none') {
            content.style.maxHeight = originalHeight;
            viewMoreBtn.textContent = 'View More';
          } else {
            content.style.maxHeight = 'none';
            viewMoreBtn.textContent = 'View Less';
          }
        });
      }
    });
  }
  
  initAppGrid() {
    // Initialize app grid for installed apps
    const appItems = document.querySelectorAll('.app-item');
    appItems.forEach(app => {
      app.addEventListener('click', () => {
        // Show app details or perform action when app is clicked
        const appName = app.querySelector('.app-name').textContent;
        console.log(`App clicked: ${appName}`);
        
        // Example of showing an app details modal
        this.showAppDetails(app);
      });
    });
  }
  
  showAppDetails(appElement) {
    // This is a placeholder for showing app details
    // In a real implementation, this would show a modal with app details
    const appName = appElement.querySelector('.app-name').textContent;
    
    // For demo purposes only - in production would create and show a modal
    console.log(`Showing details for ${appName}`);
    
    // Highlight the selected app
    document.querySelectorAll('.app-item').forEach(item => {
      item.classList.remove('selected');
    });
    appElement.classList.add('selected');
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new Cards();
});