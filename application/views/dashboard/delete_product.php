<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

    <div id="page-wrapper">

        <div class="row">

            <div class="col-md-12">

                <h1>Delete Product</h1>

                <div style="padding: 0 2%">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Purchased Price</th>
                            <th>Sale Price</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Tax</th>
                            <th>Images</th>
                            <th>Added</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Purchased Price</th>
                            <th>Sale Price</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Tax</th>
                            <th>Images</th>
                            <th>Added</th>
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

<?php
include 'inc/jsfooterlink.inc.php';
?>

<script>
    jQuery(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
