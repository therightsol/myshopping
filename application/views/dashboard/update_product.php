<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<div id="page-wrapper">

    <div class="row">

        <div class="col-md-12">

            <h1 style="text-align: center;">Update Products </h1>

            <div style="padding: 0 2%">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>

                        <th>S.no</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Purchase Price</th>
                        <th>Sales Price</th>
                        <th>View Record</th>


                    </tr>
                    </thead>
                    <tfoot>
                    <tr>

                        <th>S.no</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Purchase Price</th>
                        <th>Sales Price</th>
                        <th>View Record</th>

                    </tr>
                    </tfoot>
                    <tbody>

                    <?php $i = 1; ?>
                    <?php  foreach ($r as $row): ?>
                        <tr>

                            <td><?php echo $i;   ?></td>

                            <td><?php echo $row['id'];   ?></td>
                            <td><?php echo $row['title'];   ?></td>
                            <td><?php echo $row['slug'];   ?></td>
                            <td><?php echo $row['purchaseprice'];   ?></td>
                            <td><?php echo $row['saleprice'];   ?></td>
                            <!--<td><a class="btn" href="<?php /*$root; */?>view_specificRecord/<?php /*  echo $row['id'];   */?>">view record</a></td>-->

                            <td><a href="<?php echo $root;?>dashboard/view_update_specificRecord/<?php   echo $row['id'];   ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>UPDATE</a></td>

                            </td>


                        </tr>
                        <?php $i++ ; ?>

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

