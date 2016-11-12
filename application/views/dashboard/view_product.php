<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<div id="page-wrapper">

    <div class="row">

        <div class="col-md-12">

            <h1 style="text-align: center;">All Products </h1>

            <div style="padding: 0 2%">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>

                        <th>S.no</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>

                        <th>View Record</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>

                        <th>S.no</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>

                        <th>View Record</th>
                    </tr>
                    </tfoot>
                    <tbody>


                    <?php  foreach ($r as $row): ?>
                    <tr>
                       <td>1</td>

                        </tr>


                    <?php endforeach;?>




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

