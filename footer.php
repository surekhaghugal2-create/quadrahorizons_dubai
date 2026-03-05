<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Work+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
            <h2>Contact Us </h2>
            <div class="split-form-container">
                <form class="modern-form" action="send-mail.php" method="POST">

                    <div class="form-group">
                        <input type="text" required placeholder=" " name="name">
                        <label>NAME</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group country-code-wrapper number-background">

                            <select id="split-country-select"></select>
                        </div>
                        <div class="form-group mobile-wrapper">
                            <input type="tel" required placeholder=" " name="contact">
                            <label>MOBILE</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="email" required placeholder=" " name="email">
                        <label>EMAIL</label>
                    </div>
                    <div class="form-row booking-row">
                        <div class="form-group">
                            <input type="text" name="meeting_date" id="meeting_date" placeholder=" " required>
                            <label>MEETING DATE</label>
                        </div>
                        <div class="form-group">
                            <select name="meeting_time" required placeholder=" ">
                                <option value="" disabled selected></option>
                                <option>10:00 AM</option>
                                <option>10:30 AM</option>
                                <option>11:00 AM</option>
                                <option>11:30 AM</option>
                                <option>12:00 PM</option>
                                <option>12:30 PM</option>
                                <option>01:00 PM</option>
                                <option>01:30 PM</option>
                                <option>02:00 PM</option>
                                <option>02:30 PM</option>
                                <option>03:00 PM</option>
                                <option>03:30 PM</option>
                                <option>04:00 PM</option>
                                <option>04:30 PM</option>
                                <option>05:00 PM</option>
                                <option>05:30 PM</option>
                                <option>06:00 PM</option>

                            </select>
                            <label>MEETING TIME</label>
                        </div>

                    </div>

                    <div class="form-row location-row">
                        <div class="form-group">
                            <input type="text" name="location" placeholder=" " required>
                            <label>CITY</label>
                        </div>

                        <div class="form-group">
                            <select name="country" required>
                                <option value="" disabled selected></option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="India">India</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Oman">Oman</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Australia">Australia</option>
                                <option value="Canada">Canada</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                                <option value="Russia">Russia</option>
                                <option value="China">China</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Netherlands">Netherlands</option>
                            </select>
                            <label>COUNTRY</label>
                        </div>
                    </div>


                    <!-- <div class="form-group">
                            <input type="text" name="location" placeholder=" " required>
                            <label>LOCATION</label>
                        </div> -->

                    <button type="submit" class="split-btn">
                        MEET OUR BRAND AMBASSADOR
                    </button>


                </form>
            </div>
        </div>

    </div>
</section>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const select = document.getElementById("split-country-select");
        const countries = [{
                code: "+971",
                name: "UAE"
            }, {
                code: "+1",
                name: "USA"
            },
            {
                code: "+44",
                name: "UK"
            }, {
                code: "+91",
                name: "IND"
            },
            {
                code: "+966",
                name: "KSA"
            }, {
                code: "+7",
                name: "RUS"
            },
            {
                code: "+33",
                name: "FRA"
            }, {
                code: "+49",
                name: "GER"
            }
        ];

        countries.forEach(c => {
            const option = document.createElement("option");
            option.value = c.code;
            option.textContent = c.code;
            if (c.code === "+971") option.selected = true;
            select.appendChild(option);
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Disable past dates
        const today = new Date().toISOString().split("T")[0];
        document.getElementById("meeting_date").setAttribute("min", today);

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        flatpickr("#meeting_date", {
            minDate: "today", // Past date disable
            dateFormat: "d-m-Y", // Format
            disableMobile: true // Force custom calendar
        });

    });
</script>
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const select = document.getElementById("split-country-select");

        const countries = [{
                code: "+971",
                name: "United Arab Emirates"
            },
            {
                code: "+91",
                name: "India"
            },
            {
                code: "+1",
                name: "United States"
            },
            {
                code: "+44",
                name: "United Kingdom"
            },
            {
                code: "+966",
                name: "Saudi Arabia"
            },
            {
                code: "+974",
                name: "Qatar"
            },
            {
                code: "+965",
                name: "Kuwait"
            },
            {
                code: "+968",
                name: "Oman"
            },
            {
                code: "+973",
                name: "Bahrain"
            },
            {
                code: "+61",
                name: "Australia"
            },
            {
                code: "+1",
                name: "Canada"
            },
            {
                code: "+33",
                name: "France"
            },
            {
                code: "+49",
                name: "Germany"
            },
            {
                code: "+39",
                name: "Italy"
            },
            {
                code: "+34",
                name: "Spain"
            },
            {
                code: "+7",
                name: "Russia"
            },
            {
                code: "+86",
                name: "China"
            },
            {
                code: "+65",
                name: "Singapore"
            },
            {
                code: "+60",
                name: "Malaysia"
            },
            {
                code: "+27",
                name: "South Africa"
            },
            {
                code: "+20",
                name: "Egypt"
            },
            {
                code: "+92",
                name: "Pakistan"
            },
            {
                code: "+880",
                name: "Bangladesh"
            },
            {
                code: "+63",
                name: "Philippines"
            },
            {
                code: "+81",
                name: "Japan"
            },
            {
                code: "+82",
                name: "South Korea"
            },
            {
                code: "+90",
                name: "Turkey"
            },
            {
                code: "+55",
                name: "Brazil"
            },
            {
                code: "+31",
                name: "Netherlands"
            }
        ];

        countries.forEach(c => {
            const option = document.createElement("option");
            option.value = c.code;
            option.textContent = `${c.code} - ${c.name}`;
            if (c.code === "+971") option.selected = true;
            select.appendChild(option);
        });
    });
</script> -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const countrySelect = document.querySelector("select[name='country']");

    const countries = [
        "Afghanistan","Albania","Algeria","Argentina","Australia","Austria",
        "Bahrain","Bangladesh","Belgium","Brazil","Bulgaria",
        "Canada","China","Colombia","Croatia",
        "Denmark","Egypt","Finland","France",
        "Germany","Greece",
        "India","Indonesia","Ireland","Italy",
        "Japan","Jordan",
        "Kuwait",
        "Malaysia","Mexico",
        "Netherlands","New Zealand","Nigeria",
        "Oman",
        "Pakistan","Philippines","Poland","Portugal",
        "Qatar",
        "Romania","Russia",
        "Saudi Arabia","Singapore","South Africa","South Korea","Spain",
        "Sweden","Switzerland",
        "Thailand","Turkey",
        "United Arab Emirates","United Kingdom","United States",
        "Vietnam"
    ];

    countries.sort();

    countries.forEach(country => {
        let option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        countrySelect.appendChild(option);
    });

});
</script>