<!-- <footer class="binghatti-footer" id="footerTrigger">
        
        <div class="cover-panel">
            <div class="cover-bg"></div>
            <div class="cover-text">
                <h2>CONNECT WITH<br>THE BRAND</h2>
            </div>
        </div>

        <div class="footer-content">
            <div class="content-container">
                <div class="f-left">
                    <div class="f-heading">
                        <h2>EXPRESS<br><span>YOUR</span><span>INTEREST</span></h2>
                    </div>
                    <div class="f-links">
                        <a href="#">FIND A SALES BOUTIQUE</a>
                        <a href="#">DISCOVER THE COLLECTION</a>
                    </div>
                </div>

                <div class="f-right">
                    <form class="f-form">
                        <div class="form-group">
                            <label>NAME</label>
                            <input type="text" class="f-input" placeholder="Your Name">
                        </div>
                        <div class="form-row">
                            <div class="form-group small">
                                <label>+971</label>
                                <input type="text" class="f-input">
                            </div>
                            <div class="form-group large">
                                <label>MOBILE</label>
                                <input type="text" class="f-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="email" class="f-input">
                        </div>
                        <button type="button" class="f-btn">MEET OUR BRAND AMBASSADOR</button>
                    </form>
                </div>
            </div>
        </div>

    </footer>
    
    <div class="copyright">© 2026 QUADRA HORIZON. ALL RIGHTS RESERVED.</div>

    <script src="js/script.js"></script>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quadra Horizon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<footer class="binghatti-footer">

    <div class="footer-content">
        <div class="content-container">

            <!-- LEFT -->
            <div class="f-left">
                <h2>EXPRESS<br><span>YOUR</span><span>INTEREST</span></h2>
                <a href="#">FIND A SALES BOUTIQUE</a>
                <a href="#">DISCOVER THE COLLECTION</a>
            </div>

            <!-- RIGHT FORM -->
            <div class="f-right">
                <form class="f-form" action="send-mail.php" method="POST">

                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" name="name" class="f-input" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group small">
                            <label>+971</label>
                            <input type="text" class="f-input" value="+971" readonly>
                        </div>
                        <div class="form-group large">
                            <label>MOBILE</label>
                            <input type="text" name="mobile" class="f-input" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" name="email" class="f-input" required>
                    </div>

                    <button type="submit" class="f-btn">
                        MEET OUR BRAND AMBASSADOR
                    </button>

                </form>
            </div>

        </div>
    </div>

</footer>

<script src="js/script.js"></script>
</body>
</html>
