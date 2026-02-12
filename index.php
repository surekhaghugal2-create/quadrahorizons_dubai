<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>Branded Luxury Collection</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<!-- HEADER -->
<header class="main-header">
  <div class="brand">
    <span>BINGHATTI</span>
  </div>
  <div class="header-icons">
    <label for="menu-toggle">☰</label>
  </div>
</header>

<input type="checkbox" id="menu-toggle">

<!-- MENU -->
<div class="mega-menu">
  <label for="menu-toggle" class="close-menu">✕</label>

  <div class="menu-columns">
    <ul>
      <li>Home home</li>
      <li>Mercedes-Benz Places</li>
      <li>Premium</li>
      <li><a href="<?= basename($_SERVER['PHP_SELF']) === 'readyproject.php' ? '#' : 'readyproject.php' ?>">Ready Project</a></li>
      <li>Find a Boutique</li>
    </ul>

    <ul>
      <li>The Brand</li>
      <li>Jacob & Co</li>
      <li>All Projects</li>
      <li>Events</li>
      <li>Investor Relations</li>
    </ul>

    <ul>
      <li>Bugatti Residences</li>
      <li>Luxury</li>
      <li>New Releases</li>
      <li>News & Media</li>
    </ul>
  </div>

  <div class="menu-socials">
    Instagram &nbsp; Facebook &nbsp; YouTube &nbsp; LinkedIn
  </div>
</div>

<!-- HERO -->
<section class="hero">
  <img src="image/1.jpg" class="hero-bg">
  <div class="hero-overlay"></div>

  <div class="hero-content">
    <h1>MERCEDES-BENZ PLACES</h1>
    <span class="divider"></span>
    <p>BINGHATTI COLLECTION</p>
    <p>Properties COLLECTION</p>
  
    <button class="btn-outline">DISCOVER THE COLLECTION</button>
  </div>
</section>

<!-- LUXURY -->
<section class="section">
  <h2 class="section-title">Branded Luxury Collection</h2>
  <div class="luxury-feature">
    <img src="image/2.jpg">
    <div class="luxury-caption">
      <h3>THE SKY MANSION PENTHOUSE</h3>
      <p>BUGATTI RESIDENCES BY BINGHATTI</p>
      <div class="dots">
        <span></span><span class="active"></span><span></span>
      </div>
    </div>
  </div>
</section>

<!-- AWARDS -->
<section class="section">
  <h2 class="section-title">Awards & Recognitions</h2>
  <div class="awards-grid">
    <div class="award">Award 1</div>
    <div class="award">Award 2</div>
    <div class="award">Award 3</div>
    <div class="award">Award 4</div>
  </div>
   <div class="awards-grid">
    <div class="award">Award 5</div>
    <div class="award">Award 6</div>
    <div class="award">Award 7</div>
    <div class="award">Award 8</div>
  </div>
</section>

<!-- PROJECTS -->
<section class="section">
  <h2 class="section-title">Exquisite Development</h2>
  <div class="container">
    <div class="projects-grid">
      <div class="project-card">
        <img src="image/3.avif">
        <span class="tag">Residential</span>
        <h4>Skyblade</h4>
        <p>Downtown Dubai</p>
      </div>
      <div class="project-card">
        <img src="image/3.avif">
        <span class="tag">Residential</span>
        <h4>Flare</h4>
        <p>JVC</p>
      </div>
      <div class="project-card">
        <img src="image/3.avif">
        <span class="tag">Residential</span>
        <h4>Hillside</h4>
        <p>Dubai Science Park</p>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section class="section center">
  <h2>Connect with the brand</h2>
  <p>Express Your Interest</p>

  <!-- ENQUIRY FORM -->
  <form action="api/submit-enquiry.php" method="POST" style="margin-top:30px;">
    <input type="text" name="name" placeholder="Your Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <button class="btn-outline" type="submit">SUBMIT ENQUIRY</button>
  </form>
</section>

<!-- FOOTER -->
<footer class="footer">
  © 2026 BINGHATTI. ALL RIGHTS RESERVED
</footer>

</body>
</html>