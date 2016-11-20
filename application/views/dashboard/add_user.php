<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>

<!-- This Add product Page -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/add_user" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <h1 style="text-align: center;">Add User</h1>

            <?php if($user_added): ?>

            <div class="row">

                <div class="col-md-12">

                    <div class=" alert alert-success">User added successfully.</div>

                </div>

            </div>

            <?php endif; ?>

            <?php if($user_failed): ?>

                <div class="row">

                    <div class="col-md-12">

                        <div class=" alert alert-danger">User Not added due to some error.</div>

                    </div>

                </div>

            <?php endif; ?>


            <div class="text-danger">

                <?php if(form_error('first_name')){

                    echo form_error('first_name');

                }
                ?>

            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">First Name:</label>
                <div class="col-md-6">
                    <input id="first_name" name="firstname" type="text" placeholder="Your First Name" class="form-control input-md">

                </div>
                <span id="slug-message"></span>
            </div>

            <div class="text-danger">

                <?php if(form_error('last_name')){

                    echo form_error('last_name');

                }
                ?>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Last Name:</label>
                <div class="col-md-6">
                    <input id="last_name" name="lastname" type="text" placeholder="Your Last Name" class="form-control input-md">

                </div>
            </div>

            <div class="text-danger">

                <?php if(form_error('user_name')){

                    echo form_error('user_name');

                }
                ?>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Username:</label>
                <div class="col-md-6">
                    <input id="user_name" name="user_name" type="text"  placeholder="Your Username" class="form-control input-md">

                </div>
            </div>

            <div class="text-danger">

                <?php if(form_error('e_mail')){

                    echo form_error('e_mail');

                }
                ?>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Email:</label>
                <div class="col-md-6">
                    <input id="e_mail" name="e_mail" type="text"  placeholder="Your Email" class="form-control input-md">

                </div>
            </div>

            <div class="text-danger">

                <?php if(form_error('user_pass')){

                    echo form_error('user_pass');

                }
                ?>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Password:</label>
                <div class="col-md-6">
                    <input id="user_pass" name="user_pass" type="password" placeholder="Enter Password" class="form-control input-md">

                </div>
            </div>

            <div class="text-danger">

                <?php if(form_error('c_pass')){

                    echo form_error('c_pass');

                }
                ?>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Confirm Password:</label>
                <div class="col-md-6">
                    <input id="c_pass" name="c_pass" type="password" placeholder="Confirm Password" class="form-control input-md">

                </div>
            </div>

            <div class="text-danger">

                <?php if(form_error('dash_pass')){

                    echo form_error('dash_pass');

                }
                ?>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="pprice">Dashboard Password:</label>
                <div class="col-md-6">
                    <input id="dash_pass" name="dash_pass" type="password" placeholder="Dashboard Password" class="form-control input-md">

                </div>
            </div>



            <div class="form-group">
                <label class="col-md-4 control-label" for="sprice">User Type:</label>
                <div class="col-md-6">
                    <input id="usertype" name="usertype" type="text" placeholder="User type" class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button type="submit" id="dash_button" name="dash_button" class="btn btn-primary">Add User</button>
                </div>
            </div>

        </fieldset>
    </form>

</div>

<?php
include 'inc/jsfooterlink.inc.php';
?>



