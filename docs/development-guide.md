# Ciphera Development Guide

## Adding Navigation Items

### Adding a Main Navigation Item

To add a new main navigation item to the sidebar:

1. Open `components/sidebar.php`
2. Add a new `li` element with class `sidebar-nav-item` inside the `sidebar-nav` list:

```html
<li class="sidebar-nav-item">
  <a href="your-page.php" class="sidebar-nav-link">
    <i class="fas fa-icon-name"></i>
    <span>Your Item Name</span>
  </a>
</li>
```

### Adding a Dropdown with Subitems

To create a dropdown menu with subitems:

1. Add a new `li` element with classes `sidebar-nav-item` and `sidebar-nav-item-has-children`
2. Add a unique `data-id` attribute
3. Include the dropdown icon
4. Add the subnav container and items:

```html
<li class="sidebar-nav-item sidebar-nav-item-has-children" data-id="unique-id">
  <a href="#" class="sidebar-nav-link">
    <i class="fas fa-icon-name"></i>
    <span>Dropdown Name</span>
    <i class="fas fa-chevron-down sidebar-nav-dropdown-icon"></i>
  </a>
  <div class="sidebar-nav-dropdown">
    <ul class="sidebar-subnav">
      <li class="sidebar-subnav-item">
        <a href="subitem.php" class="sidebar-subnav-link">
          <i class="fas fa-sub-icon"></i>
          <span>Subitem Name</span>
        </a>
      </li>
    </ul>
  </div>
</li>
```

## Creating New Pages

1. Create a new PHP file in the root directory
2. Use this template:

```php
<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Title | Ciphera</title>
  
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
        <h1 class="page-title">Your Page Title</h1>
        
        <!-- Your Content Here -->
        <div class="card">
          <!-- Card Content -->
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
```

## Adding Components

1. Create a new PHP file in the `components` directory
2. Use this template for a basic card component:

```php
<div class="card">
  <div class="card-header">
    <h2 class="card-title">
      <i class="fas fa-icon-name"></i> 
      Component Title
    </h2>
  </div>
  
  <div class="card-body">
    <!-- Component Content -->
  </div>
</div>
```

### Component Types

1. Info Cards:
```php
<div class="card info-card">
  <div class="card-header">
    <h2 class="card-title">
      <i class="fas fa-info-circle"></i> 
      Info Title
    </h2>
  </div>
  
  <div class="card-body">
    <div class="info-grid">
      <div class="info-item">
        <div class="info-label">Label</div>
        <div class="info-value">Value</div>
      </div>
    </div>
  </div>
</div>
```

2. Activity Lists:
```php
<div class="card">
  <div class="card-header">
    <h2 class="card-title">
      <i class="fas fa-list"></i> 
      Activity Title
    </h2>
  </div>
  
  <div class="card-body">
    <div class="activity-list">
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-icon-name"></i>
        </div>
        <div class="activity-content">
          <div class="activity-title">Item Title</div>
          <div class="activity-message">Message</div>
          <div class="activity-time">Time</div>
        </div>
      </div>
    </div>
  </div>
</div>
```

3. Data Tables:
```php
<div class="card">
  <div class="card-header">
    <h2 class="card-title">
      <i class="fas fa-table"></i> 
      Table Title
    </h2>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Column 1</th>
            <th>Column 2</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Data 1</td>
            <td>Data 2</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
```

Remember to follow the existing styling patterns and use the predefined CSS classes and variables from the theme style guide.