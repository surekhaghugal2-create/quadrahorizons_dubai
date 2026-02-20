<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Work+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<section class="express-split">
    
    <div class="split-bg">
        <img src="image/2.jpg" alt="City Background">
    </div>
    <div class="split-overlay"></div>

    <div class="intro-text-wrapper">
        <p class="intro-sub">Welcome to Quadra Horizons</p>
        <h1 class="intro-title">Connect <br> <span>With The Brand</span></h1>
    </div>

    <div class="split-content-layer">
        
        <div class="split-col-left">
            <div class="left-content-wrap">
                <h2 class="split-heading">
                    EXPRESS<br>
                    <span class="thin-text">YOUR<br>INTEREST</span>
                </h2>
                <div class="split-links">
                    <a href="#">FIND A SALES BOUTIQUE <i class="fas fa-chevron-right"></i></a>
                    <a href="#">DISCOVER THE COLLECTION <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <div class="split-socials">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-snapchat"></i></a>

            </div>
        </div>

        <div class="split-col-right">
            <div class="split-form-container">
                <form class="modern-form">
                    
                    <div class="form-group">
                        <input type="text" required placeholder=" ">
                        <label>NAME</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group country-code-wrapper">
                            <select id="split-country-select"></select>
                        </div>
                        <div class="form-group mobile-wrapper">
                            <input type="tel" required placeholder=" ">
                            <label>MOBILE</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="email" required placeholder=" ">
                        <label>EMAIL</label>
                    </div>

<<<<<<< HEAD
                    <button type="submit" class="split-btn">
                        MEET OUR BRAND AMBASSADOR
                    </button>
=======
                    <button type="button" class="f-btn">MEET OUR BRAND AMBASSADOR</button>
                </form> -->
                <form class="f-form" action="mailto:surekhaghugal2@gmail.com" method="POST">

    <div class="form-group">
        <label >NAME</label>
        <input type="text" name="name" class="f-input" placeholder="Your Name" required>
    </div>

    <div class="form-row">
        <div class="form-group small">
            <label >CODE</label>
            <input type="text" name="code" class="f-input" value="+971" required>
             <select class="c-select">
             <option value="+971">🇦🇪 +971 (UAE)</option>
            <option value="+91">🇮🇳 +91 (India)</option>
            <option value="+1">🇺🇸 +1 (USA)</option>
            <option value="+44">🇬🇧 +44 (UK)</option>
            <option value="+61">🇦🇺 +61 (Australia)</option>
            <option value="+966">🇸🇦 +966 (Saudi)</option>
            <option value="+974">🇶🇦 +974 (Qatar)</option>
            </select>
        </div>                        
                                    
        <div class="form-group large">
            <label>MOBILE</label>
            <input type="text" name="mobile" class="f-input" placeholder="50 123 4567" required>
        </div>
    </div>

    <div class="form-group">
        <label>EMAIL</label>
        <input type="email" name="email" class="f-input" placeholder="name@example.com" required>
    </div>

    <button type="submit" class="f-btn">
        MEET OUR BRAND AMBASSADOR
    </button>

</form>
>>>>>>> 800bf6d9b3d6284f69a2e97ee13b799a747838ef

                </form>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const select = document.getElementById("split-country-select");
        const countries = [
            { code: "+971", name: "UAE" }, { code: "+1", name: "USA" },
            { code: "+44", name: "UK" }, { code: "+91", name: "IND" },
            { code: "+966", name: "KSA" }, { code: "+7", name: "RUS" },
            { code: "+33", name: "FRA" }, { code: "+49", name: "GER" }
        ];

        countries.forEach(c => {
            const option = document.createElement("option");
            option.value = c.code;
            option.textContent = c.code; 
            if(c.code === "+971") option.selected = true;
            select.appendChild(option);
        });
    });
</script>