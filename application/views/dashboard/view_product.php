<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<div id="page-wrapper">

    <div class="row">

        <div class="col-md-12">

            <h1>All Products</h1>

            <div style="padding: 0 2%">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>

                        <th>Title</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Purchase Price</th>
                        <th>Sale Price</th>
                        <th>Discounted Price</th>
                        <th>Tax</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Purchase Price</th>
                        <th>Sale Price</th>
                        <th>Discounted Price</th>
                        <th>Tax</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>

                        <td></td>

                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

<script>
    jQuery(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

<?php
include 'inc/jsfooterlink.inc.php';
?>

