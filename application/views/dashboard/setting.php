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
                        <th>Sr No</th>
                        <th>Key</th>
                        <th>Value</th>
                        <th></th>
                        <th></th>
                        <th>Edit</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Sr No</th>
                        <th>Key</th>
                        <th>Value</th>
                        <th></th>
                        <th></th>
                        <th>Edit</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php if (isset($r) && is_array($r)): $i = 1; ?>
                    <?php  foreach ($r as $row): ?>
                    <tr>
                        <td><?php echo $i;   ?></td>
                        <td><?php echo $row['key'];   ?></td>
                        <td><?php echo $row['value'];   ?></td>
                        <td></td>
                        <td></td>
                        <td><a href="<?php echo $root;?>dashboard/update_specificsetting/<?php   echo $row['key'];   ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>EDIT</a></td>
                        <td></td>
                        <td></td>
                    </tr>
                        <?php $i++ ; ?>
                    <?php endforeach; endif;?>
                    </tbody>
                </table>
            </div>
            <div class="newsetting">
                <h1 class="sethead" style="text-align: center;margin-top: 20px">
                    WANT TO CREATE NEW SETTING
                </h1>
            </div>
        </div>
    </div>
</div>

<div id="page-wrapper">
    <div class="">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">NEW SETTING </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="text-danger">

                                <div class="form-group">
                                    <input class="form-control" placeholder="UNIQUE KEY" type="text" name="key">
                                </div>
                                    <div class="text-danger">
                                        <?php



                                        ?>
                                    </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="VALUE" name="value" type="text" value="" >
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="SAVE SETTING" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include 'inc/jsfooterlink.inc.php';
?>
