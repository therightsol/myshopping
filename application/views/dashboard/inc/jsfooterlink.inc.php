<!-- jQuery -->
<script src="<?php echo $root ?>dashboardassets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $root ?>dashboardassets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo $root ?>dashboardassets/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Flot Charts JavaScript -->
<script src="<?php echo $root ?>dashboardassets/vendor/flot/excanvas.min.js"></script>
<script src="<?php echo $root ?>dashboardassets/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo $root ?>dashboardassets/vendor/flot/jquery.flot.pie.js"></script>
<script src="<?php echo $root ?>dashboardassets/vendor/flot/jquery.flot.resize.js"></script>
<script src="<?php echo $root ?>dashboardassets/vendor/flot/jquery.flot.time.js"></script>
<script src="<?php echo $root ?>dashboardassets/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo $root ?>dashboardassets/data/flot-data.js"></script>

<!--data tables-->


<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo $root ?>dashboardassets/js/sb-admin-2.js"></script>
<script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    });
    // popover demo
    $("[data-toggle=popover]")
        .popover()
</script>

<script>
    jQuery(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


