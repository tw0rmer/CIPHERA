// Sidebar functionality for Ciphera Dashboard

class Sidebar {
  constructor() {
    this.sidebar = document.querySelector('.sidebar');
    this.toggle = document.querySelector('.sidebar-toggle');
    this.contentWrapper = document.querySelector('.content-wrapper');
    this.mobileToggle = document.querySelector('.mobile-menu-toggle');
    this.dropdownItems = document.querySelectorAll('.sidebar-nav-item-has-children');
    this.navLinks = document.querySelectorAll('.sidebar-nav-link, .sidebar-subnav-link');
    
    this.init();
  }
  
  init() {
    if (!this.sidebar) return;
    
    this.loadSavedState();
    this.setupEventListeners();
    this.highlightCurrentPage();
  }
  
  loadSavedState() {
    const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
    if (isCollapsed) {
      this.sidebar.classList.add('collapsed');
      this.contentWrapper?.classList.add('expanded');
    }
    
    // Load saved dropdown states
    this.dropdownItems.forEach(item => {
      const id = item.dataset.id;
      if (id && localStorage.getItem(`dropdown_${id}`) === 'open') {
        item.classList.add('open');
      }
    });
  }
  
  setupEventListeners() {
    // Toggle sidebar collapse
    if (this.toggle) {
      this.toggle.addEventListener('click', () => this.toggleSidebar());
    }
    
    // Mobile toggle
    if (this.mobileToggle) {
      this.mobileToggle.addEventListener('click', () => this.toggleMobileSidebar());
    }
    
    // Close mobile sidebar when clicking outside
    document.addEventListener('click', (e) => {
      if (window.innerWidth <= 768 && 
          this.sidebar && 
          !this.sidebar.contains(e.target) && 
          !this.mobileToggle?.contains(e.target) &&
          this.sidebar.classList.contains('mobile-visible')) {
        this.sidebar.classList.remove('mobile-visible');
      }
    });
    
    // Dropdown items
    this.dropdownItems.forEach(item => {
      const link = item.querySelector('.sidebar-nav-link');
      if (link) {
        link.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          this.toggleDropdown(item);
        });
      }
    });
    
    // Expand parent dropdowns if child is active
    this.expandActiveParents();
  }
  
  toggleSidebar() {
    this.sidebar.classList.toggle('collapsed');
    this.contentWrapper?.classList.toggle('expanded');
    localStorage.setItem('sidebarCollapsed', this.sidebar.classList.contains('collapsed'));
  }
  
  toggleMobileSidebar() {
    this.sidebar.classList.toggle('mobile-visible');
  }
  
  toggleDropdown(item) {
    const wasOpen = item.classList.contains('open');
    
    // Close all other dropdowns
    this.dropdownItems.forEach(other => {
      if (other !== item) {
        other.classList.remove('open');
        const id = other.dataset.id;
        if (id) localStorage.removeItem(`dropdown_${id}`);
      }
    });
    
    // Toggle the clicked dropdown
    item.classList.toggle('open', !wasOpen);
    
    // Save state
    const id = item.dataset.id;
    if (id) {
      if (!wasOpen) {
        localStorage.setItem(`dropdown_${id}`, 'open');
      } else {
        localStorage.removeItem(`dropdown_${id}`);
      }
    }
  }
  
  highlightCurrentPage() {
    const currentPath = window.location.pathname;
    
    this.navLinks.forEach(link => {
      const linkPath = link.getAttribute('href');
      if (linkPath && (currentPath.endsWith(linkPath) || currentPath.includes(linkPath + '/'))) {
        link.classList.add('active');
        
        // If it's a subnav link, open its parent
        const parentItem = link.closest('.sidebar-nav-item-has-children');
        if (parentItem) {
          parentItem.classList.add('open');
          const id = parentItem.dataset.id;
          if (id) localStorage.setItem(`dropdown_${id}`, 'open');
        }
      }
    });
  }
  
  expandActiveParents() {
    const activeSubLink = document.querySelector('.sidebar-subnav-link.active');
    if (activeSubLink) {
      const parentItem = activeSubLink.closest('.sidebar-nav-item-has-children');
      if (parentItem) {
        parentItem.classList.add('open');
        const id = parentItem.dataset.id;
        if (id) localStorage.setItem(`dropdown_${id}`, 'open');
      }
    }
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new Sidebar();
});