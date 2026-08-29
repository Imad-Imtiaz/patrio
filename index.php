<?php
/**
 * PATRIO Homepage — Production Shared Hosting Entry Point
 * Hosted on standard cPanel / shared PHP hosting
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PATRIO — A New Standard Is Coming. Premium luxury fashion & editorial collection.">
  <title>PATRIO — Stand For Something</title>

  <!-- Preconnect to Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Preload Hero Background Image -->
  <link rel="preload" as="image" href="assets/images/hero.jpg">

  <!-- External Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Full-Screen Hero Section (100vh) -->
  <header class="hero" id="home">

    <!-- Right-Side Hero Background Image -->
    <div class="hero-image-container">
      <img src="assets/images/hero.jpg" alt="PATRIO Hero" class="hero-image">
    </div>
    
    <!-- Top Header / Navigation -->
    <nav class="header fade-in-up delay-1">
      <!-- Left: Logo -->
      <a href="#home" class="logo" aria-label="PATRIO Home">
        <img src="assets/images/patrio-logo.png" alt="PATRIO" class="logo-image">
      </a>

      <!-- Center/Right Navigation -->
      <ul class="nav-center">
        <li><a href="#home" class="nav-link active">HOME</a></li>
        <li><a href="#philosophy" class="nav-link">PHILOSOPHY</a></li>
        <li><a href="#standard" class="nav-link">THE STANDARD</a></li>
        <li><a href="#journal" class="nav-link">JOURNAL</a></li>
        <li><a href="#join" class="nav-link">JOIN THE LIST</a></li>
      </ul>

      <!-- Right Side: Location & Hamburger Toggle -->
      <div class="header-right">
        <span class="location-tag">LONDON</span>
        <span class="nav-separator">|</span>
        <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
          <span></span>
          <span></span>
        </button>
      </div>
    </nav>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay" aria-hidden="true">
      <ul class="mobile-nav-links">
        <li><a href="#home">HOME</a></li>
        <li><a href="#philosophy">PHILOSOPHY</a></li>
        <li><a href="#standard">THE STANDARD</a></li>
        <li><a href="#journal">JOURNAL</a></li>
        <li><a href="#join">JOIN THE LIST</a></li>
      </ul>
    </div>

    <!-- Hero Content (Left Side Placement) -->
    <div class="hero-content">
      <span class="eyebrow fade-in-up delay-2">INTRODUCING PATRIO</span>
      
      <h1 class="main-heading fade-in-up delay-3">STAND FOR<br>SOMETHING.</h1>
      
      <div class="divider-line fade-in-up delay-4"></div>
      
      <p class="tagline fade-in-up delay-4">A NEW STANDARD IS COMING.</p>
      
      <a href="#join" class="cta-button fade-in-up delay-5">JOIN THE PATRIO LIST</a>
    </div>

    <!-- Scroll Indicator (Bottom Left) -->
    <div class="scroll-indicator fade-in-up delay-5">
      <div class="scroll-line"></div>
      <span class="scroll-text">SCROLL</span>
    </div>

  </header>

  <!-- Vanilla JavaScript -->
  <script src="assets/js/main.js"></script>
</body>
</html>
