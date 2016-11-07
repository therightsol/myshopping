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
                    <li role="presentation" class="brand-nav "><a href="#" aria-controls="" role="tab" data-toggle="tab"> <i class="fa fa-user" aria-hidden="true"></i> Account</a></li>
                    <li role="presentation" class="brand-nav "><a href="#" aria-controls="" role="tab" data-toggle="tab"> <i class="fa fa-cog" aria-hidden="true"></i> Change Password</a></li>
                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"> <i class="fa fa-credit-card" aria-hidden="true"></i> Billing Address</a></li>
                    <li role="presentation" class="brand-nav"><a href="#" aria-controls="" role="tab" data-toggle="tab"> <i class="fa fa-truck" aria-hidden="true"></i> Shipping Address</a></li>
                    <li role="presentation" class="brand-nav"><a href="#" aria-controls="" role="tab" data-toggle="tab"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> My Order</a></li>
                    <li role="presentation" class="brand-nav"><a href="#" aria-controls="" role="tab" data-toggle="tab"> <i class="fa fa-lock" aria-hidden="true"></i> Privacy</a></li>
                    <li role="presentation" class="brand-nav "><a href="#" aria-controls="" role="tab" data-toggle="tab"> <i class="fa fa-trash" aria-hidden="true"></i> Delete Account</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <p>
                        <h1>
                            BILLING INFORMATION
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
                            <label for="FirstName">First Name</label>
                            <label for="LastName" style="margin-left: 130px;">Last Name</label>
                            <br>
                            <input type="text" class="form-control" id="FirstName" name="fname" placeholder="First Name">
                                <input type="text" class="form-control" id="LastName" name="lname" placeholder="Last Name">
                            </div>
                                <br>
                        </form>
                       <div>
                           <label for="companyname"> Company Name *</label>
                           <br>
                           <input type="text" id="companyname" name="c.name" class="form-control input1" style="width: 60%;">
                       </div>
                          <div>
                           <label for="address"> Address *</label>
                              <br>
                              <input type="text" id="address" name="address" class="form-control input1" style="width: 60%;">
                          </div>
                        <div>
                        <label for="city">Town/City *</label>
                        <br>
                        <input type="text" id="city" class="form-control input1" name="city" style="width: 60%;">
                        </div>
                        <button type="submit" class="btn btn-info" style="margin-top:10px;">SUBMIT</button>
                        <p>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <p>
                          </p>
                        <p>
                            </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        <p>
                          </p>
                        <p>
                           </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <p>
                           </p>
                        <p>
                            </p>
                        <p>
                            </p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>