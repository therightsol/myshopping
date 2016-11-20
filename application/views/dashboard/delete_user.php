<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<div id="page-wrapper">

    <div class="row">

        <div class="col-md-12">

            <h1 style="text-align: center;">Delete User </h1>

            <div style="padding: 0 2%">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>

                        <th>S.no</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>


                    </tr>
                    </thead>
                    <tfoot>
                    <tr>

                        <th>S.no</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>

                    </tr>
                    </tfoot>
                    <tbody>

                    <?php if (isset($r) && is_array($r)): $i = 1; ?>

                        <?php  foreach ($r as $row): ?>
                            <tr>

                                <td><?php echo $i;   ?></td>

                                <td><?php echo $row['id'];   ?></td>
                                <td><?php echo $row['username'];   ?></td>
                                <td><?php echo $row['email'];   ?></td>
                                <td><?php echo $row['usertype'];   ?></td>
                                <td><?php echo $row['createdAt'];   ?></td>
                                <td><?php echo $row['updatedAt'];   ?></td>
                                <!--<td><a class="btn" href="<?php /*$root; */?>view_specificRecord/<?php /*  echo $row['id'];   */?>">view record</a></td>-->

                                <td><a href="<?php echo $root;?>dashboard/delete_specificUser/<?php   echo $row['id'];   ?>" class="btn btn-danger"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>DELETE RECORD</a></td>

                                </td>


                            </tr>
                            <?php $i++ ; ?>

                        <?php endforeach; endif; ?>




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

