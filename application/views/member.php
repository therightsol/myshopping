<?php
include 'inc/memberhead.php'
?>

<div class="container">
	<div class="row">
        <div role="tabpanel">
            <div class="col-sm-3">
                <div class="logo text-center">
                    <img src="http://lorempixel.com/output/people-q-g-64-64-6.jpg" class="img-responsive center-block" alt="Logo">
                    <h2>SARAH MILLER</h2>
                </div>
                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                    <li role="presentation" class="brand-nav active "><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"> <i class="fa fa-user" aria-hidden="true"></i> Account</a></li>
                    <li role="presentation" class="brand-nav "><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> <i class="fa fa-cog" aria-hidden="true"></i> Change Password</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"> <i class="fa fa-credit-card" aria-hidden="true"></i> Billing Address</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"> <i class="fa fa-truck" aria-hidden="true"></i> Shipping Address</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> My Order</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"> <i class="fa fa-lock" aria-hidden="true"></i> Privacy</a></li>
                    <li role="presentation" class="brand-nav "><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab"> <i class="fa fa-trash" aria-hidden="true"></i> Delete Account</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <p>
                            <h1>
                            ACCOUNT
                            <hr>
                        </h1>
                        <form method="post">
                         <div>
                             <label for="uname">
                                 User Name *
                             </label>
                             <input type="text" name="uname" id="uname" class="form-control" style="width:40%;" placeholder="Your Username">
                         </div>
                            <div>
                                <label for="email" style="margin-top: 20px;">
                                    Your Email *
                                </label>
                                <input type="email" name="uname" id="uname" style="width:40%;" class="form-control" placeholder="Your Email">
                            </div>
                            <div>
                                <label for="phone" style="margin-top: 20px;">
                                    Your Phone No.# *
                                </label>
                                <input type="number" name="uname" id="phone" style="width:40%;" class="form-control" placeholder="Your Phone No#">
                            </div>
                            <div>
                                <label for="fax" style="margin-top: 20px;">
                                    Your Fax No.# *
                                </label>
                                <input type="number" name="fax" id="fax" style="width:40%;" class="form-control" placeholder="Your Fax No#">
                            </div>
                            <div>
                                <label for="pass" style="margin-top: 20px;">
                                    Your Password *
                                </label>
                                <input type="password" name="pass" id="phone" style="width:40%;" class="form-control" placeholder="Your Password ">
                            </div>
                            <button type="submit" class="btn btn-info" style="margin-top: 20px">SUBMIT</button>

                        </form>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <p>
                            <h1>
                            UPDATE PASSWORD
                            <hr>
                        </h1>
                        <form action="" method="post">
                            <div>
                                <label for="oldpass"> Old Passwrd *</label>
                                <input type="password" class="form-control" name="opass" style="width: 40%;" PLACEHOLDER="Please Enter Your OLd Password">
                            </div>
                            <div>
                                <label for="npass" style="margin-top: 10px;"> New Password *</label>
                                <input type="password" class="form-control" name="npass" style="width:40%;" PLACEHOLDER="Please Enter Your OLd Password">
                            </div>
                            <div>
                                <label for="cnpass" style="margin-top: 10px;"> Confirm New Password *</label>
                                <input type="password" class="form-control" name="cnpass" style="width:40%;" PLACEHOLDER="Please Enter Your OLd Password">
                            </div>
                            <button type="submit" class="btn btn-info" style="margin-top: 10px"> SUBMIT </button>
                        </form>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        <p>
                        <h1>
                            BILLING INFORMATION
                            <hr>
                        </h1>
                        <label for="country">COUNTRY *</label>
                        <br>
                        <select name="country" id="country" class="form-control">
                            <option value="">PAKISTAN</option>
                            <option value="">LONDON</option>
                            <option value="">AMERICA</option>
                            <option value="">SOUTH AFARICA</option>
                            <option value="">NEW ZEALAND</option>
                        </select>
                        <br>
                        <form action="" class="form-inline">
                            <div>
                            <label for="FirstName" style="margin-top: 10px">First Name</label>
                            <label for="LastName" style="margin-left: 130px;margin-top: 10px">Last Name</label>
                            <br>
                            <input type="text" class="form-control" id="FirstName" name="fname" placeholder="First Name">
                                <input type="text" class="form-control" id="LastName" name="lname" placeholder="Last Name">
                            </div>
                                <br>
                        </form>
                       <div>
                           <label for="companyname" style="margin-top: 10px"> Company Name *</label>
                           <br>
                           <input type="text" id="companyname" name="c.name" class="form-control" style="width: 60%;" placeholder="Enter Your Company Name">
                       </div>
                          <div>
                           <label for="address" style="margin-top: 10px"> Address *</label>
                              <br>
                              <input type="text" id="address" name="address" class="form-control" style="width: 60%;"  placeholder="Enter Your Billing Address">
                          </div>
                        <div>
                        <label for="city" style="margin-top: 10px">Town/City *</label>
                        <br>
                        <input type="text" id="city" class="form-control" name="city" style="width: 60%;"  placeholder="Enter Your City Name">
                        </div>
                        <button type="submit" class="btn btn-info" style="margin-top:10px;">SUBMIT</button>
                        <p>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <p>
                            <h1>
                            SHIPPING ADDRESS
                            <hr>
                        </h1>
                        <h2 style="text-align: center">
                            PENDING
                        </h2>

                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab5">
                        <p>
                        <h1>
                           MY ORDER
                            <hr>
                        </h1>
                        <h2 style="text-align: center">
                            PENDING
                        </h2>
                          </p>
                        </div>
                    <div role="tabpanel" class="tab-pane" id="tab6">
                        <p>
                        <h1>
                          PRIVACY
                            <hr>
                        </h1>
                        <h2 style="text-align: center">
                            PENDING
                        </h2>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab7">
                        <p>
                            <h1>
                            DELETE ACCOUNT
                            <hr>
                        </h1>
                        <div>
                            <h3>
                                Are You Sure To Want To Delete Your Account
                            </h3>
                        </div>
                        <button type="submit" class="btn btn-danger">
                            DELETE ACCOUNT
                        </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>