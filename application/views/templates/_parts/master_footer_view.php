<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!-- Footer -->
<!-- <footer>
    <div class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p class="m-0 text-center text-black">© Copyright 2024 han-test</p>
    </div>
</footer> -->

<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row row-bottom-padded-sm">
            < class="col-md-12">
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


<script>
    $(function() {
        $('#colour-variation ul').styleSwitcher({
            defaultThemeId: 'theme-switch',
            hasPreview: false,
            cookie: {
                expires: 30,
                lsManagingLoad: true
            }
        })
    });
    $('.option-toggle').click(function() {
        $('#colour-variations').toggleClass('sleep');
    });
</script>

<script src="<?= base_url('assets/js/main.js') ?>"></script>


<!-- Bootstrap core JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


</html>