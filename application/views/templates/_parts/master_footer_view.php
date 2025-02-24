<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row row-bottom-padded-sm">
            <div class="col-md-12">
                <p class="copyright text-center">Copyright&copy;
                    <script language = 'JavaScript' type="text/javascript">type="text/javascript"
                    now = new Date
                    theYear=now.getYear()
                    if (theYear < 1900) theYear=theYear+1900
                    document.write(theYear)</script> Thermalution&reg; All Rights Reserved.
                </p>
                <p class="copyright text-center">Petatech International Co., Ltd.tel: <a href="tel:+886287519998" target="_blank">+886-2 8687 3732</a>fax: +886-2 8687 3732 e-mail: <a href="mailto:info@thermalution.com?bcc=sophia@petatech-co.com" target="_blank">info@thermalution.com</a>
                </p>
                <p class="copyright text-center"><font size="-1" color="#bebebe">Template by FREEHTML5 | Template hasbeen changes were made.</font>
                </p>
            </div>
            <div class="row"><div class="col-md-12 text-center">
                <ul class="social social-circle">
                    <li><a href="https://www.facebook.com/ALLOYSTAR/" target="_blank"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="mailto:info@thermalution.com"><i class="icon-mail2"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
<!-- jQuery Easing -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
<!-- Owl Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="assets/js/jquery.style.switcher.js"></script>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                autoWidth: false,
                responsive: {
                    0: { items: 1 },
                    600: { items: 1 },
                    1000: { items: 1 }
                }
            });
        });
    </script>

    <script>
        $(function(){
            $('#colour-variations ul').styleSwitcher({
                defaultThemeId: 'theme-switch',
                hasPreview: false,
                cookie: {
                expires: 30,
                isManagingLoad: true
                }
            });	
            $('.option-toggle').click(function() {
                $('#colour-variations').toggleClass('sleep');
            });
        });
    </script>
<!-- End demo purposes only -->

<!-- Main JS (Do not remove) -->
    <script src="assets/js/main.js"></script>

</html>