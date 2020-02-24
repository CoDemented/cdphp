
<footer class="footer">
    <div class="wrapper">
        <div class="widget-area">
            <div class="widg">

                <div class="footerLogo">
                    <img src="<?php echo _ASSETS; ?>imgs/cd-logo-light.svg" alt="">
                </div>
                <p class="footer-des">Codemented is Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="widg">
                <div class="footer-widg-title">
                <h3>Quick Links</h3>
                </div>
            </div>
            <div class="widg">
                <div class="footer-widg-title">
                    <h3>Title Here footer</h3>
                    <div class="footer-link-box">
                        <a href="#">Start your Project</a>
                        <a href="#">Special Discount</a>
                        <a href="#">Partnership</a>
                        <a href="#">Packages</a>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
            <div class="widg">
                <div class="footer-widg-title">
                    <h3>Title Here footer</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="wrapper">
            <p class="copyright">Copyright - 2020. Developed by <a href="#"> CoDementeD </a> All-Rights Reserved.</p>
        </div>
    </div>
</footer>
<style>
    footer.footer {
        background: #484848;
        padding-top: 50px;
    }
    .widget-area {
        background: #333;
        color: #fff;
        flex-flow: row wrap;
        display: flex;
        padding: 30px 10px;
    }
    .widget-area .widg {
        flex: 1 1 250px;
        background: #1f1f1f;
        padding: 10px;
        padding-left: 20px;
        clip-path: polygon(10px 0%, 100% 0%, calc(100% - 10px) 100%, 0% 100%);
    }
    p.footer-des {
        line-height: 1.5;
    }

    .footer-widg-title h3::after {
        width: 45px;
        height: 2px;
        background: #5f5f5f;
        content: "";
        display: block;
        margin-top: 8px;
    }
    .footer-link-box a {
        display: block;
        color: #fff;
        padding-bottom: 15px;
    }
    .copyright-bar {
        background: #bfbfbf;
        padding: 5px;
    }
</style>




<script src="<?php echo _ASSETS; ?>js/jquery341.js"></script>
<script src="<?php echo _ASSETS; ?>js/index.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</body>

</html>