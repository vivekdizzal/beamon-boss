   <!-- Page Footer -->
          <div class="row"></br></div>
            <div class="row"></br></div>
            <div class="row"></br></div>
            <div class="row"></br></div>
              <div class="row"></br></div>
            <div class="row"></br></div>
              <div class="row"></br></div>
            <div class="row"></br></div>
            <div class="row"></br></div>
            <div class="row"></br></div>
        <footer id="content-footer">

            <div class="row">
                <div class="col-md-6">
                    <span class="footer-legal">Copyright © 2016. All rights reserved. <a href="#">Therms of use</a> | <a href="#">Privacy Policy</a></span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="footer-meta"></span>
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-angle-up"></span>
                    </a>
                </div>
            </div>
          


        </footer>
        <!-- /Page Footer -->

    </section>
    <!-- /Main Wrapper -->

</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery/jquery-1.11.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery/jquery_ui/jquery-ui.min.js'); ?>"></script>
<!-- <script src="assets/js/utility/fullscreen/jquery.fullscreen.js"></script> -->

<!-- HighCharts Plugin -->
<script src="<?php echo base_url('assets/js/plugins/highcharts/highcharts.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/c3charts/d3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/c3charts/c3.min.js'); ?>"></script>

<!-- Simple Circles Plugin -->
<script src="<?php echo base_url('assets/js/plugins/circles/circles.js'); ?>"></script>

<!-- FullCalendar Plugin -->
<script src="<?php echo base_url('assets/js/plugins/fullcalendar/lib/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/fullcalendar/fullcalendar.min.js'); ?>"></script>

<!-- Date/Month - Pickers -->
<script src="<?php echo base_url('assets/allcp/forms/js/jquery-ui-monthpicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/allcp/forms/js/jquery-ui-datepicker.min.js'); ?>"></script>

<!-- Magnific Popup Plugin -->
<script src="<?php echo base_url('assets/js/plugins/magnific/jquery.magnific-popup.js'); ?>"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url('assets/js/utility/utility.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js'); ?>" ></script>
<script src="<?php echo base_url('assets/js/demo/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?> "></script>

<!-- Widget JS -->
<script src="<?php echo base_url('assets/js/demo/widgets.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/demo/widgets_sidebar.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/dashboard1.js'); ?>"></script>

<!-- Datatables JS -->
<script src="<?php echo base_url('assets/js/plugins/datatables/media/js/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/datatables/media/js/dataTables.bootstrap.js'); ?>"></script>
<script>
	$(document).ready(function() {
    $('.datatable-index').DataTable({
		"sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
	});
} );
</script>
<script src="<?php echo base_url('assets/js/jquery.validationEngine.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validationEngine-en.js'); ?>"></script>
<!-- Charts JS -->
<script src="<?php echo base_url('assets/js/plugins/highcharts/highcharts.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/circles/circles.js'); ?>"></script>
<!-- Page JS -->
<script src="<?php echo base_url('assets/js/demo/charts/highcharts.js'); ?>"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // ChighCharts JS
        demoHighCharts.init();
		
		

            if ($('#high-column2').length) {

                // Column Chart 2
                $('#high-column2').highcharts({
                    credits: false,
                    colors: [bgPrimary, bgPrimary, bgWarning,
                        bgWarning, bgInfo, bgInfo
                    ],
                    chart: {
                        backgroundColor: 'transparent',
                        marginTop: 30,
                        marginBottom: 30,
                        type: 'column'
                    },
                    legend: {
                        enabled: false
                    },
                    title: {
                        text: null
                    },
                    xAxis: {
                        lineWidth: 0,
                        tickLength: 6,
                        title: {
                            text: null
                        },
                        labels: {
                            enabled: true
                        }
                    },
                    yAxis: {
                        max: 20,
                        lineWidth: 0,
                        gridLineWidth: 0,
                        lineColor: '#EEE',
                        gridLineColor: '#EEE',
                        title: {
                            text: null
                        },
                        labels: {
                            enabled: false,
                            style: {
                                fontWeight: '400'
                            }
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} Quotes</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            colorByPoint: true
                        }
                    },
                    series: [{
                        name: 'Sales',
                        data: [10, 10, 10, 10, 10, 10,
                            10, 10, 10, 10, 10, 10,
                            14, 20, 19, 15, 16, 18,
                            12, 14, 20, 19, 15, 16,
                            18
                        ]
                    }]
                });

            }


    });
</script>
		  
</body>
</html>
