<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/contact.css">

<section class="contact-hero">
    <video autoplay muted loop playsinline class="contact-hero-video">
        <source src="video/Dubai_Real_Estate_Video_Generated.mp4" type="video/mp4">
    </video>
    <div class="contact-hero-overlay"></div>
    
    <div class="contact-hero-content slide-in-left">
        <h1 class="hero-heading-line">Contact Us</h1>
        <p>Your Gateway to Luxury Living</p>
    </div>
</section>

<section class="contact-main-wrapper">
    
    <div class="contact-details slide-in-left scroll-anim delay-100">
        <h2 class="heading-line">Get In <span>Touch</span></h2>
        
        <p class="contact-desc">
            Whether you are buying, selling, or looking for property management, 
            our team of experts is ready to assist you in Dubai's most prestigious locations.
        </p>

        <div class="detail-box">
            <span class="detail-label">Visit Our Office</span>
            <div class="detail-value">Downtown Dubai, Blvd Plaza</div>
        </div>

        <div class="detail-box">
            <span class="detail-label">Call Us</span>
            <div class="detail-value"><a href="tel:+971501234567">+971 50 123 4567</a></div>
        </div>

        <div class="detail-box"> 
            <span class="detail-label">Email Us</span>
            <div class="detail-value" style="font-size: 20px;">
                <a href="mailto:info@quadrahorizon.com">info@quadrahorizon.com</a>
            </div>
        </div>

        <div class="contact-socials">
            <a href="#" class="c-social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="c-social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="c-social-icon"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>

    <div class="contact-form-box fade-in-up scroll-anim delay-200">
        <form>
            <div class="c-form-group">
                <label class="c-label">Full Name</label>
                <input type="text" class="c-input" placeholder="Your Name">
            </div>
            <div class="c-form-group">
                <label class="c-label">Email Address</label>
                <input type="email" class="c-input" placeholder="name@example.com">
            </div>
            <div class="c-form-group">
                <label class="c-label">Phone Number</label>
                <input type="tel" class="c-input" placeholder="+971 ...">
            </div>
            <div class="c-form-group">
                <label class="c-label">Message</label>
                <textarea class="c-input" rows="4" style="resize: none;" placeholder="How can we help?"></textarea>
            </div>
            <button type="button" class="c-btn">Send Request</button>
        </form>
    </div>

</section>

<div class="map-wrapper fade-in-up scroll-anim delay-100">
    <iframe class="full-map" src="https://maps.google.com/maps?q=Downtown%20Dubai,%20Blvd%20Plaza&t=m&z=14&output=embed&iwloc=near" loading="lazy"></iframe>
</div>

<?php include 'footer.php'; ?>