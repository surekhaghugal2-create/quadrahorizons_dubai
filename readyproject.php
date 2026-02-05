<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Project</title>
    <link rel="stylesheet" href="css\readyproject.css">
</head>
<body>

<!-- HERO SECTION -->
<section class="hero">
    <img src="images/hero.jpg" alt="Dubai View">
    <div class="hero-overlay">
        <h1>Luxury Living in Dubai</h1>
    </div>
</section>

<!-- PROJECT LIST CARDS -->
<section class="projects">
    <h2>Project List Cards</h2>
    <div class="card-container">
        <?php for($i=1; $i<=3; $i++) { ?>
        <div class="card">
            <img src="images/project.jpg" alt="Project">
            <h3>Project Name</h3>
            <p>Premium residential project with modern amenities and prime location.</p>
            <button>View Details</button>
        </div>
        <?php } ?>
    </div>
</section>

<!-- HOW TO CHOOSE PROPERTY -->
<section class="choose">
    <div class="choose-text">
        <h2>How to Choose the Right Property</h2>
        <p>
            Selecting the right property in Dubai requires understanding location,
            budget, lifestyle needs, and future growth potential.
        </p>
        <button class="yellow-btn">Show More</button>
    </div>
    <div class="choose-images">
        <img src="images/property1.jpg">
        <img src="images/property2.jpg">
        <img src="images/property3.jpg">
    </div>
</section>

<!-- RISKS SECTION -->
<section class="risks">
    <h2>Risks and Considerations When Buying a Ready-to-Move Apartment in Dubai</h2>

    <div class="risk-item">
        <h4>Steeper Purchase Price</h4>
        <p>Ready properties may cost more compared to off-plan developments.</p>
    </div>

    <div class="risk-item">
        <h4>Less Flexibility in Payment Plans</h4>
        <p>Payment plans are often shorter and less flexible.</p>
    </div>

    <div class="risk-item">
        <h4>Older Used Properties</h4>
        <p>Some properties may require maintenance or upgrades.</p>
    </div>
</section>

<!-- BENEFITS SECTION -->
<section class="benefits">
    <h2>Benefit Of Choosing Ready Property</h2>

    <div class="benefit">
        <h4>Immediate Possession</h4>
        <p>You can move in or rent out the property immediately.</p>
    </div>

    <div class="benefit">
        <h4>Price Range</h4>
        <p>No risk of price escalation once the purchase is completed.</p>
    </div>

    <div class="benefit">
        <h4>Maintenance Cost</h4>
        <p>Clear understanding of maintenance costs upfront.</p>
    </div>
</section>
<section class="interest-wrapper">

  <!-- LEFT PANEL -->
  <div class="interest-left">
    <h1>
      EXPRESS<br>
      YOUR<br>
      INTEREST
    </h1>

    <div class="interest-links">
      <a href="#">Find a Sales Boutique →</a>
      <a href="#">Discover the Collection →</a>
    </div>

    <div class="socials">
      <span>○</span><span>○</span><span>○</span><span>○</span>
    </div>
  </div>

  <!-- RIGHT PANEL -->
  <div class="interest-right">
    <form method="POST">

      <div class="field">
        <label>NAME</label>
        <input type="text" name="name" required>
      </div>

      <div class="field-row">
        <div class="field small">
          <label>+971</label>
          <input type="text" disabled>
        </div>

        <div class="field">
          <label>MOBILE</label>
          <input type="text" name="mobile" required>
        </div>
      </div>

      <div class="field">
        <label>EMAIL</label>
        <input type="email" name="email" required>
      </div>

      <p class="terms">
        By submitting, you agree to our <a href="#">terms & conditions</a>
      </p>

      <button type="submit" class="submit-btn">
        MEET OUR BRAND AMBASSADOR
      </button>

    </form>
  </div>

</section>


<footer>
    <p>© <?php echo date("Y"); ?> Real Estate Company</p>
</footer>

</body>
</html>
