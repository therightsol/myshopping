<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

    <div id="page-wrapper">

        <div class="row">

            <div class="col-md-12">

                <h1 style="text-align: center;">View Users </h1>

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

                        <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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