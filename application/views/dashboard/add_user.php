<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>
<!-- This Add product Page -->
<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/add_user" class="form-horizontal form-group-xs">
        <fieldset>

            <!-- Form Name -->
            <fieldset><h2 class="sub-title" style="text-align: center;">YOUR PERSONAL DETAILS</h2>

                <?php if($added): ?>

                    <div class="row">

                        <div class="col-md-12">

                            <div class=" alert alert-success">User added successfully.</div>

                        </div>

                    </div>

                <?php endif; ?>

                <?php if($internal): ?>

                    <div class="row">

                        <div class="col-md-12">

                            <div class=" alert alert-danger">Sorry there are some internal errors.</div>

                        </div>

                    </div>

                <?php endif; ?>

                <?php if($userexists): ?>

                    <div class="row">

                        <div class="col-md-12">

                            <div class=" alert alert-danger">Sorry the user already exists.</div>

                        </div>

                    </div>

                <?php endif; ?>


                <div class="text-danger">

                    <?php if(form_error('u_fname')){

                        echo form_error('u_fname');

                    }
                    ?>

                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_fname">First Name:</label>
                    <div class="col-md-6">
                        <input id="u_fname" name="u_fname" type="text" placeholder="Your First Name" class="form-control input-md">

                    </div>
                    <span id="slug-message"></span>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_lname')){

                        echo form_error('u_lname');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_lname">Last Name:</label>
                    <div class="col-md-6">
                        <input id="u_lname" name="u_lname" type="text" placeholder="Your Last Name" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_email')){

                        echo form_error('u_email');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_email">Email:</label>
                    <div class="col-md-6">
                        <input id="u_email" name="u_email" type="email"  placeholder="Your Email" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_name')){

                        echo form_error('u_name');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_name">Username:</label>
                    <div class="col-md-6">
                        <input id="u_name" name="u_name" type="text"  placeholder="Your Username" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_tel')){

                        echo form_error('u_tel');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_tel">Telephone:</label>
                    <div class="col-md-6">
                        <input id="u_tel" name="u_tel" type="text"  placeholder="Your Telephone" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_fax')){

                        echo form_error('u_fax');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_fax">Fax:</label>
                    <div class="col-md-6">
                        <input id="u_fax" name="u_fax" type="text" placeholder="Enter Fax" class="form-control input-md">

                    </div>
                </div>

            </fieldset>
            <fieldset><h1 style="text-align: center;">Your Address</h1>

                <div class="text-danger">

                    <?php if(form_error('u_com')){

                        echo form_error('u_com');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_com">Company:</label>
                    <div class="col-md-6">
                        <input id="u_com" name="u_com" type="text" placeholder="Your Company" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_add')){

                        echo form_error('u_add');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_add">Address 1:</label>
                    <div class="col-md-6">
                        <input id="u_add" name="u_add" type="text" placeholder="Your Address" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_add2')){

                        echo form_error('u_add2');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_add2">Address 2:</label>
                    <div class="col-md-6">
                        <input id="u_add2" name="u_add2" type="text" placeholder="Your Address" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_city')){

                        echo form_error('u_city');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_city">City:</label>
                    <div class="col-md-6">
                        <input id="u_city" name="u_city" type="text" placeholder="Your City" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_post')){

                        echo form_error('u_post');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_post">Post Code:</label>
                    <div class="col-md-6">
                        <input id="u_post" name="u_post" type="text" placeholder="Post Code" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_country')){

                        echo form_error('u_country');

                    }
                    ?>

                </div>

                <div class="form-group-md"><span class="input-lg"></span>

                    <label for="u_country">Country:</label>

                    <div class="large-selectbox form-control clearfix"><select id="u_country" name="u_country"
                                                                               class="selectpicker">
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Brazil">Brazil</option>
                            <option value="France">France</option>
                            <option value="Italy">Italy</option>
                            <option value="Spain">Spain</option>
                        </select></div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_state')){

                        echo form_error('u_state');

                    }
                    ?>

                </div>

                <div class="form-group-md"><span class="input-lg"></span>

                    <label for="u_state">Region/State:</label>

                    <div class="large-selectbox form-control clearfix"><select id="u_state" name="u_state"
                                                                               class="selectpicker">
                            <option value="California">California</option>
                            <option value="Texas">Texas</option>
                            <option value="NewYork">NewYork</option>
                            <option value="Narnia">Narnia</option>
                            <option value="Jumanji">Jumanji</option>
                        </select></div>
                </div>



            </fieldset>

            <fieldset><h1 style="text-align: center;">Your Password</h1>

                <div class="text-danger">

                    <?php if(form_error('u_pass')){

                        echo form_error('u_pass');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_pass">Password:</label>
                    <div class="col-md-6">
                        <input id="u_pass" name="u_pass" type="password" placeholder="Enter Password" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_con')){

                        echo form_error('u_con');

                    }
                    ?>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="u_con">Confirm Password:</label>
                    <div class="col-md-6">
                        <input id="u_con" name="u_con" type="password" placeholder="Confirm Password" class="form-control input-md">

                    </div>
                </div>

                <div class="text-danger">

                    <?php if(form_error('u_check')){

                        echo form_error('u_check');

                    }
                    ?>

                </div>

                <div class="input-group custom-checkbox"><input type="checkbox" name="u_check"> <span
                        class="checbox-container"> I have reed and
                    agree to the <a href="<?php echo $root; ?>privacy">Privacy Policy</a>.
                </div>

            </fieldset>


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



