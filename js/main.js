// Main JavaScript for Ciphera Dashboard Theme

document.addEventListener('DOMContentLoaded', function() {
  // Initialize components
  initSidebar();
  initUserMenu();
  initAnimations();
  
  // Add background animation element
  const bgAnimation = document.createElement('div');
  bgAnimation.classList.add('bg-animation');
  document.body.appendChild(bgAnimation);
});

// Initialize sidebar functionality
function initSidebar() {
  const sidebarToggle = document.querySelector('.sidebar-toggle');
  const sidebar = document.querySelector('.sidebar');
  const contentWrapper = document.querySelector('.content-wrapper');
  
  if (sidebarToggle && sidebar && contentWrapper) {
    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('collapsed');
      contentWrapper.classList.toggle('expanded');
      localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
    });
    
    // Initialize from stored preference
    const sidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
    if (sidebarCollapsed) {
      sidebar.classList.add('collapsed');
      contentWrapper.classList.add('expanded');
    }
    
    // Mobile sidebar toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    if (mobileMenuToggle) {
      mobileMenuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('mobile-visible');
      });
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
      if (window.innerWidth <= 768 && 
          !sidebar.contains(event.target) && 
          !mobileMenuToggle?.contains(event.target) &&
          sidebar.classList.contains('mobile-visible')) {
        sidebar.classList.remove('mobile-visible');
      }
    });
  }
  
  // Dropdown navigation
  const dropdownItems = document.querySelectorAll('.sidebar-nav-item-has-children');
  dropdownItems.forEach(item => {
    const link = item.querySelector('.sidebar-nav-link');
    link.addEventListener('click', function(e) {
      if (sidebar.classList.contains('collapsed')) return;
      
      e.preventDefault();
      item.classList.toggle('open');
      
      // Close other dropdowns
      dropdownItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('open')) {
          otherItem.classList.remove('open');
        }
      });
    });
  });
}

// Initialize user menu
function initUserMenu() {
  const userMenuToggle = document.querySelector('.user-menu-toggle');
  const userMenu = document.querySelector('.user-menu');
  
  if (userMenuToggle && userMenu) {
    userMenuToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      userMenu.classList.toggle('active');
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!userMenu.contains(e.target)) {
        userMenu.classList.remove('active');
      }
    });
  }
}

// Add animations to elements
function initAnimations() {
  // Add neon text effect to specific elements
  document.querySelectorAll('.logo, .page-title, .card-title').forEach(el => {
    el.classList.add('neon-text');
  });
  
  // Stagger card animations
  const cards = document.querySelectorAll('.card');
  cards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.1}s`;
  });
  
  // Add hover effects to buttons
  document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('mouseenter', function() {
      this.classList.add('scale');
    });
    
    btn.addEventListener('mouseleave', function() {
      this.classList.remove('scale');
    });
  });
}

// Format relative time
function formatRelativeTime(dateString) {
  const now = new Date();
  const date = new Date(dateString);
  const seconds = Math.floor((now - date) / 1000);
  
  if (seconds < 60) return `${seconds} seconds ago`;
  
  const minutes = Math.floor(seconds / 60);
  if (minutes < 60) return `${minutes} minute${minutes !== 1 ? 's' : ''} ago`;
  
  const hours = Math.floor(minutes / 60);
  if (hours < 24) return `${hours} hour${hours !== 1 ? 's' : ''} ago`;
  
  const days = Math.floor(hours / 24);
  if (days < 7) return `${days} day${days !== 1 ? 's' : ''} ago`;
  
  return date.toLocaleDateString();
}

// Toggle dark mode (not needed for this implementation as we're dark-mode only)
function toggleDarkMode() {
  // This function is a placeholder in case dark mode toggle is needed in the future
  // Currently, the theme is dark-mode only per requirements
  console.log("Dark mode is the default and only theme per requirements");
}