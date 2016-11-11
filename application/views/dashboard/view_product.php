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
                    <?php
                    if($r) {

                        // if(count($data) > 0){
                        foreach ($r as $row) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['title'] . '</td>';
                            echo '<td>' . $row['description'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn" href="<?php echo $root; ?>dashboard/view_product?id=' . $row['id'] . '">Read</a>';
                            echo '&nbsp;';
                            echo '<a class="btn" href="<?php echo $root; ?>dashboard/view_product?id=' . $row['id'] . '">Update</a>';
                            echo '&nbsp;';
                            echo '<a class="btn" href="<?php echo $root; ?>dashboard/view_product?id=' . $row['id'] . '">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                        }

                    }



                    ?>

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

