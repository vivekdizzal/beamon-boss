
<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- CanvasBG JS -->
<!-- <script src="assets/js/plugins/canvasbg/canvasbg.js"></script> -->

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!-- Page JS -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });

    });
</script>

<!-- /Scripts -->

</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/utility-login.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 22 Jul 2016 06:26:40 GMT -->
</html>