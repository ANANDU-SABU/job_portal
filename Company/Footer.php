<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
<div class="container-fluid px-lg-5 px-3">
    <div class="row footer-top">
        <div class="col-lg-6 footer-grid-wthree-w3ls">
            <div class="footer-title">
                <h3>Job portal</h3>
            </div>
            <div class="footer-text">
                <p>Find the Right Job Right Now.</p>
                <ul class="footer-social text-left mt-lg-4 mt-3">

                    <!-- <li class="mx-2">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fab fa-google-plus-g"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fab fa-linkedin-in"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fas fa-rss"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fab fa-vk"></span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
       
        <div class="col-lg-6 footer-grid-wthree-w3ls">
            <div class="footer-title">
                <h3>Quick Links</h3>
            </div>
            <ul class="links">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
               
            </ul>
            <ul class="links">
                <li>
                    <a href="how.html">How it works</a>
                </li>
               
                <!-- <li>
                    <a href="adminlogin.php">Admin Login</a>
                </li> -->
            </ul>

            <div class="clearfix"></div>
        </div>
        <div class="col-lg-3 footer-grid-wthree-w3ls">
           
            
        </div>
    </div>
    <div class="copyright mt-4">
        <p class="copy-right text-center ">&copy; 2022 All Rights Reserved | Design by
            <a href=""> Sathigiri College </a>
        </p>
    </div>
</div>
</footer>
<!-- //footer -->

<!--model-forms-->
<!--/Login-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <div class="login px-4 mx-auto mw-100">
                <h5 class="text-center mb-4">Login Now</h5>
                <form action="#" method="post">
                    
                    
                   
                   
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<!--//Login-->
<!--/Register-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="login px-4 mx-auto mw-100">
                <h5 class="text-center mb-4">Register Now</h5>
                
            </div>
        </div>

    </div>
</div>
</div>
<!--//Register-->

<!--//model-form-->
<!-- js -->
<!--/slider-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.zoomslider.min.js"></script>
<!--//slider-->
<!--search jQuery-->
<script src="js/classie-search.js"></script>
<script src="js/demo1-search.js"></script>
<!--//search jQuery-->

<script>
$(document).ready(function() {
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- //dropdown nav -->
<!-- password-script -->
<script>
window.onload = function() {
    document.getElementById("password1").onchange = validatePassword;
    document.getElementById("password2").onchange = validatePassword;
}

function validatePassword() {
    var pass2 = document.getElementById("password2").value;
    var pass1 = document.getElementById("password1").value;
    if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
    else
        document.getElementById("password2").setCustomValidity('');
    //empty string means no validation error
}
</script>
<!-- //password-script -->

<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
$('.counter').countUp();
</script>
<!-- //stats -->

<!-- //js -->
<script src="js/bootstrap.js"></script>
<!--/ start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
jQuery(document).ready(function($) {
    $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 900);
    });
});
</script>
<script>
$(document).ready(function() {
    /*
                            var defaults = {
                                  containerID: 'toTop', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear' 
                             };
                            */

    $().UItoTop({
        easingType: 'easeOutQuart'
    });

});
</script>
<!--// end-smoth-scrolling -->
</body>

</html>