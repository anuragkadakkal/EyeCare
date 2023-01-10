

        <!-- main-footer -->
        <footer class="main-footer p_relative">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="top-inner">
                        <ul class="footer-menu">
                            <!-- <li><a href="index-2.html">Management</a></li>
                            <li><a href="index-2.html">About Us</a></li>
                            <li><a href="index-2.html">Company</a></li> -->
                        </ul>
                        <div class="footer-logo">
                            <figure class="logo"><a href="index-2.html"><img src="assets/images/eyelet.png" alt=""></a></figure>
                        </div>
                        <ul class="footer-menu">
                            <!-- <li><a href="index-2.html">Career</a></li>
                            <li><a href="index-2.html">Location</a></li>
                            <li><a href="index-2.html">Contact </a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / -->
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright"><p><a href="index-2.html">EyeLet</a> &copy; 2022 All Right Reserved</p></div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
        
    </div>
<script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Optcare/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 03:58:44 GMT -->
</html>