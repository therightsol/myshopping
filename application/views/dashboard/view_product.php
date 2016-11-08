<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<div id="page-wrapper">

    <div class="row">

        <div class="col-md-12">

            <h1 style="text-align: center;">All Products</h1>

            <div style="padding: 0 2%">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>Status</th>
                        <th>Purchase Price</th>
                        <th>Sale Price</th>
                        <th>Discounted %</th>
                        <th>Tax</th>
                        <th>Images</th>
                        <th>Added Date</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>

                        <th>Name</th>
                        <th>Status</th>
                        <th>Purchase Price</th>
                        <th>Sale Price</th>
                        <th>Discounted %</th>
                        <th>Tax</th>
                        <th>Images</th>
                        <th>Added Date</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>

                        <td>Nokia 6300</td>
                        <td>Published</td>
                        <td>7000</td>
                        <td>7500</td>
                        <td>10</td>
                        <td>100</td>
                        <td>images.jpg</td>
                        <td>8/11/2016</td>

                    </tr>

                    <tr><td>Motorola Moto G</td>
                        <td>Dratf</td>
                        <td>15000</td>
                        <td>16000</td>
                        <td>5</td>
                        <td>100</td>
                        <td>images.jpg</td>
                        <td>8/11/2016</td>

                    </tr>

                    <tr>

                        <td>Htc One M8</td>
                        <td>Published</td>
                        <td>36000</td>
                        <td>37000</td>
                        <td>10</td>
                        <td>100</td>
                        <td>images.jpg</td>
                        <td>8/11/2016</td>

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

