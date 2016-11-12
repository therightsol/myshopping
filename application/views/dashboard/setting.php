<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center;">AVAILABLE SETTINGS</h1>
            <div style="padding: 0 2%">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Sr #</th>
                        <th>Key</th>
                        <th>Value</th>
                        <th>Created At</th>
                        <th>Upadted At</th>
                        <th>Edit</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Sr #</th>
                        <th>Key</th>
                        <th>Value</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Edit</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>

                    <tr>
                        <td>Nokia 6300</td>
                        <td>7000</td>
                        <td>7500</td>
                        <td>10</td>
                        <td>Published</td>
                        <td><a href="<?php echo $root?>dashboard/update_setting" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDIT</a></td>
                        <td></td>
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
