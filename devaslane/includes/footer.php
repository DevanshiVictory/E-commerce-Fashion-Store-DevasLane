<style>
/* ===== FOOTER STYLES ===== */
.site-footer {
    background: #000;
    color: #fff;
    padding: 50px 40px;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

/* LEFT COOKIE SECTION */
.footer-cookie {
    flex: 1;
    min-width: 280px;
}

.footer-cookie h3 {
    font-size: 20px;
    margin-bottom: 15px;
}

.footer-cookie p {
    font-size: 14px;
    line-height: 1.6;
    color: #ddd;
}

.learn-more {
    display: inline-block;
    margin: 10px 0;
    color: #ccc;
    text-decoration: underline;
}

.cookie-btn {
    display: inline-block;
    margin-top: 15px;
    background: rgb(246, 174, 116);
    color: #000;
    border: none;
    padding: 10px 28px;
    font-weight: bold;
    border-radius: 30px;
    cursor: pointer;
}

/* FOOTER LINKS */
.footer-links {
    flex: 2;
    display: flex;
    gap: 60px;
    flex-wrap: wrap;
}

.footer-links h4 {
    font-size: 14px;
    margin-bottom: 12px;
}

.footer-links a {
    display: block;
    color: #fff;
    text-decoration: none;
    font-size: 13px;
    margin-bottom: 6px;
}

/* BOTTOM AREA */
.footer-bottom {
    text-align: center;
    margin-top: 50px;
    font-size: 13px;
    color: #aaa;
}

.social-icons {
    margin-bottom: 15px;
}

.social-icons a {
    margin: 0 10px;
    font-size: 22px;
    color: rgb(247, 170, 122);
    text-decoration: none;
}

.terms {
    margin: 10px 0;
    text-decoration: underline;
}

.credit {
    margin-top: 10px;
    font-size: 12px;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
    }

    .footer-links {
        gap: 30px;
    }
}
</style>

<footer class="site-footer">
    <div class="footer-container">

        <!-- COOKIE TEXT -->
        <div class="footer-cookie">
            <h3>This site uses cookies</h3>
            <p>
                
            </p>

            <a href="#" class="learn-more">Learn more</a><br>
            <button class="cookie-btn">I AGREE</button>
        </div>

        <!-- LINKS -->
        <div class="footer-links">
            <div>
                <h4>ABOUT</h4>
                <a href="#">About Us</a>
                <a href="#">Sources</a>
            </div>

            <div>
                <h4>RESOURCES</h4>
                <a href="#">Key Organisations</a>
            </div>

            <div>
                <h4>CONTACT US</h4>
                <a href="#">Privacy Policy</a>
            </div>

            <div>
                <h4>DONATE</h4>
            </div>
        </div>
    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">
        <div class="social-icons">
            <a href="#">🐦</a>
            <a href="#">f</a>
            <a href="#">📸</a>
            <a href="#">▶</a>
        </div>

        <p class="terms">Terms Of Website Use</p>

        <p>
           
        </p>

        <p class="credit">
            Branding by Heather Knight | Website developed by Autonomic Co-operative
        </p>
    </div>
</footer>
