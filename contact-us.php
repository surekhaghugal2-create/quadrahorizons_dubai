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
        <!-- <form action="send-mail2.php" method="POST">
            <div class="c-form-group">
                <label class="c-label">Full Name</label>
                <input type="text" class="c-input" placeholder="Your Name" name="name">
            </div>
            <div class="c-form-group">
                <label class="c-label">Email Address</label>
                <input type="email" class="c-input" placeholder="name@example.com" name="email">
            </div>
            <div class="c-form-group">
                <label class="c-label">Phone Number</label>
                <input type="tel" class="c-input" placeholder="+971 ..." name="contact">
            </div>
         
            <div class="c-form-group">
                <label class="c-label">Select Date</label>
                <input type="date" class="c-input" name="schedule_date" required>
            </div>

    
            <div class="c-form-group">
                <label class="c-label">Select Time</label>
                <select class="c-input" name="schedule_time" required>
                    <option value="">Choose Time</option>
                    <option>09:00 AM</option>
                    <option>10:00 AM</option>
                    <option>11:00 AM</option>
                    <option>12:00 PM</option>
                    <option>01:00 PM</option>
                    <option>02:00 PM</option>
                    <option>03:00 PM</option>
                    <option>04:00 PM</option>
                    <option>05:00 PM</option>
                    <option>06:00 PM</option>
                </select>
            </div>

         
            <div class="c-form-group">
                <label class="c-label">Preferred Location</label>
                <input type="text" class="c-input" placeholder="Enter Property Location" name="location" required>
            </div>
            <div class="c-form-group">
                <label class="c-label">Select Property</label>
                <select class="c-input" name="property" required>
                    <option value="">Choose Property</option>
                    <option value="Downtown Residence">Downtown Residence</option>
                    <option value="Palm Luxury Villa">Palm Luxury Villa</option>
                    <option value="Dubai Marina Heights">Dubai Marina Heights</option>
                    <option value="Business Bay Tower">Business Bay Tower</option>
                    <option value="JBR Beachfront Apartment">JBR Beachfront Apartment</option>
                </select>
            </div>
            <div class="c-form-group">
                <label class="c-label">Message</label>
                <textarea class="c-input" rows="4" style="resize: none;" placeholder="How can we help?" name="message"></textarea>
            </div>
            <button type="submit" class="c-btn">Send Request</button>
        </form> -->
        <form action="send-mail2.php" method="POST" class="c-form-grid">

    <div class="c-form-group">
        <label class="c-label">Full Name</label>
        <input type="text" class="c-input" placeholder="Your Name" name="name">
    </div>

    <div class="c-form-group">
        <label class="c-label">Email Address</label>
        <input type="email" class="c-input" placeholder="name@example.com" name="email">
    </div>

    <div class="c-form-group">
        <label class="c-label">Phone Number</label>
        <input type="tel" class="c-input" placeholder="+971 ..." name="contact">
    </div>

    <div class="c-form-group">
        <label class="c-label">Select Date</label>
        <input type="date" class="c-input" name="schedule_date" required>
    </div>

    <div class="c-form-group">
        <label class="c-label">Select Time</label>
        <select class="c-input" name="schedule_time" required>
            <option value="">Choose Time</option>
            <option>09:00 AM</option>
            <option>10:00 AM</option>
            <option>11:00 AM</option>
            <option>12:00 PM</option>
            <option>01:00 PM</option>
            <option>02:00 PM</option>
            <option>03:00 PM</option>
            <option>04:00 PM</option>
            <option>05:00 PM</option>
            <option>06:00 PM</option>
        </select>
    </div>

    <div class="c-form-group">
        <label class="c-label">Preferred Location</label>
        <input type="text" class="c-input" placeholder="Enter Property Location" name="location">
    </div>

    <div class="c-form-group">
        <label class="c-label">Select Property</label>
        <select class="c-input" name="property">
            <option value="">Choose Property</option>
            <option>Downtown Residence</option>
            <option>Palm Luxury Villa</option>
            <option>Dubai Marina Heights</option>
            <option>Business Bay Tower</option>
            <option>JBR Beachfront Apartment</option>
        </select>
    </div>
    <div class="c-form-group">
       <label class="c-label">Select Country</label>
    <select class="c-input" name="country">
        <option value="">Choose Country</option>

        <!-- Middle East -->
        <option value="uae">United Arab Emirates</option>
        <option value="saudi_arabia">Saudi Arabia</option>
        <option value="qatar">Qatar</option>
        <option value="kuwait">Kuwait</option>
        <option value="oman">Oman</option>
        <option value="bahrain">Bahrain</option>

        <!-- Asia -->
        <option value="india">India</option>
        <option value="pakistan">Pakistan</option>
        <option value="bangladesh">Bangladesh</option>
        <option value="china">China</option>
        <option value="singapore">Singapore</option>
        <option value="malaysia">Malaysia</option>
        <option value="philippines">Philippines</option>

        <!-- Europe -->
        <option value="united_kingdom">United Kingdom</option>
        <option value="germany">Germany</option>
        <option value="france">France</option>
        <option value="italy">Italy</option>
        <option value="russia">Russia</option>
        <option value="spain">Spain</option>
        <option value="netherlands">Netherlands</option>

        <!-- Americas -->
        <option value="united_states">United States</option>
        <option value="canada">Canada</option>
        <option value="brazil">Brazil</option>

        <!-- Africa -->
        <option value="south_africa">South Africa</option>
        <option value="nigeria">Nigeria</option>
        <option value="egypt">Egypt</option>

    </select>
    </div>
    

    <!-- MESSAGE FULL WIDTH -->
    <div class="c-form-group full-width">
        <label class="c-label">Message</label>
        <textarea class="c-input" rows="3" style="resize: none;" 
        placeholder="How can we help?" name="message"></textarea>
    </div>

    <!-- BUTTON FULL WIDTH -->
    <div class="full-width">
        <button type="submit" class="c-btn">Send Request</button>
    </div>

</form>
    </div>

</section>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.493398167557!2d55.25781127605416!3d25.186578232129516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69d0bf460681%3A0xdaadfbb50754c3f!2sRegal%20Tower%20-%20502%20Al%20Mustaqbal%20St%20-%20Business%20Bay%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1772606095897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
<div class="map-wrapper fade-in-up scroll-anim delay-100">
    <iframe class="full-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.493398167557!2d55.25781127605416!3d25.186578232129516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69d0bf460681%3A0xdaadfbb50754c3f!2sRegal%20Tower%20-%20502%20Al%20Mustaqbal%20St%20-%20Business%20Bay%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1772606095897!5m2!1sen!2sin" loading="lazy"></iframe>
</div>

<?php include 'footer.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const dateInput = document.querySelector('input[name="schedule_date"]');

        if (dateInput) {

            // Set minimum date = today
            const today = new Date().toISOString().split("T")[0];
            dateInput.setAttribute("min", today);

            // AUTO OPEN CALENDAR ON CLICK
            dateInput.addEventListener("focus", function() {
                this.showPicker(); // Modern browsers support this
            });

            // Optional: Auto open when page loads
            setTimeout(() => {
                dateInput.showPicker();
            }, 1000);
        }

    });
</script>