<?php
include 'inc/dashhead.inc.php';
include 'inc/wrapper.inc.php';
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center;">Order</h1>
            <hr>
            <div>
                <form action="#" method="post" class="form-inline" id="form">

                    <label class="o_label" for="order_id">Order ID :</label>

                    <input type="text" name="order_id" class="form-control" style="margin-left: 14px"> <br>

                    <label class="o_label"  for="name">Name:</label>

                    <input type="text" name="name" class="form-control" style="margin-top:10px;margin-left: 35px;" >

                    <label class="o_label"  for="age"  style="margin-left:80px;">Age:</label>

                    <input type="text" name="age" class="form-control" >

                    <label class="o_label"  for="gender"  style="margin-left: 80px;">Sex:</label>

                    <input type="text" name="gender" class="form-control" style="margin-left: 54px;"> <br>

                    <label class="o_label"  for="address" >Address:</label>

                    <input type="text" name="address" class="form-control" style="margin-left: 16px;margin-top: 10px;width: 48.6%">


                    <label class="o_label"  for="contact"  style="margin-left: 80px;">Contact:</label>

                    <input type="text" name="contact" class="form-control" style="margin-left:31px;"> <br>


                    <label class="o_label"  for="order_date">Order Date:</label>

                    <input type="text" name="order_date" class="form-control" style="margin-top: 10px;width: 48.6%;" >

                    <label class="o_label"  for="contact"  style="margin-left: 80px;">Order Status:</label>

                    <input type="text" name="contact" class="form-control" > <br>

                    <label class="o_label"  for="contact"  style="">Shipping Address:</label>

                    <input type="text" name="contact" class="form-control" style="width: 79.5%;margin-top: 10px;"> <br>

                    <label class="o_label"  for="contact"  style="">Shipping Method:</label>

                    <input type="text" name="contact" class="form-control" style="width: 79.5%;margin-top: 10px;margin-left: 5px;"> <br>

                </form>
            </div>
            <div style="margin-top: 20px">
                <h3>
                    Order Detail Form
                </h3>
                <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Order Detail ID</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
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
            <form id="form" action="#" method="post" class="form-inline" style="float: right;margin-right: 65px">

                <label class="o_label"  for="sub_total" > Sub Total:</label>

                <input type="text" name="sub_total" class="form-control" style="margin-left: 17px"> <br>

                <label class="o_label"  for="sub_total" > Discount:</label>

                <input type="text" name="sub_total" class="form-control" style="margin-top: 10px;margin-left: 19px">  <br>

                <label class="o_label"  for="sub_total"> Grand Total:</label>

                <input type="text" name="sub_total" class="form-control"style="margin-top: 10px;margin-left: 3px">  <br>

                <button type="submit" class="btn btn-default btn-info" style="margin-left: 90px;margin-top: 20px;width: 68%"> SUBMIT </button>
            </form>
        </div>
    </div>
</div>


<?php
include 'inc/jsfooterlink.inc.php';
?>

