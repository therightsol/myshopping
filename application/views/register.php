<?php include 'inc/head.inc.php'; ?>

    <body>
<!-- This is test by RAMISH AHMED BUTT -->

<?php include 'inc/load_menu_file.php'; ?>

<?php

$error_Rg001 = false;
$error_Rg002 = false;



?>

    <section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo $root; ?>home">Home</a></li>
                <li class="active">Register Account</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title"><h1 class="title">Register Account</h1>

                    <p class="title-desc">If you already have an account, please login at <a
                            href="<?php echo $root; ?>login">login page</a>.</p></header>
                <div class="xs-margin">

                </div>
<<<<<<< HEAD
                <form novalidate method="post" action="<?php echo $root; ?>register" id="register-form">

                    <?php if ($userexists): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">Sorry ! user already exist.<br />Please choose another username.</div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($failure): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">Sorry ! Email not sent .<br />There may be some problem in Email server.</div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($success): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-info">Email sent <br/> Please Verify the Link to continue  .</div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($error_Rg001): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">ERROR Rg001 <br/> Some Values not inserted  .</div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($error_Rg002): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">ERROR Rg002 <br/> Values not inserted into Users  .</div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($failure): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">Sorry  ! There is some internal Problem .</div>
                            </div>
                        </div>
                    <?php endif; ?>
      <?php if (! $success): ?>
                <form novalidate  method="post" action="<?php echo $root; ?>register" id="register-form">
>>>>>>> origin/master
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset><h2 class="sub-title">YOUR PERSONAL DETAILS</h2>

                                <div class="text-danger">
                                    <?php
                                         if(form_error ('fname')){
                                             echo form_error ('fname');
                                         }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-user"></span><span class="input-text">First Name&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your First Name" value="<?php echo set_value('fname'); ?>" name="fname"></div>



                                <div class="text-danger">
                                    <?php
                                    if(form_error ('lname')){
                                        echo form_error ('lname');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-user"></span><span class="input-text">Last Name&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Last Name" value="<?php echo set_value('lname'); ?>" name="lname"></div>

                                <div class="text-danger">
                                    <?php
                                    if (form_error('email')){
                                        echo form_error('email');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                    <input type="text" id="email" required class="form-control input-lg"
                                           placeholder="Your Email" value="<?php echo set_value('email'); ?>" name="email">
                                </div>


                                <div class="text-danger">
                                    <?php
                                    if (form_error('username')){
                                        echo form_error('username');
                                    }
                                    ?>
                                    <div id="notAvail" class="text-danger" style="display: none;"></div>
                                    <div id="Avail"  class="text-info" style="display: none;"></div>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-user"></span><span class="input-text">Username&#42;</span></span>
                                    <input  type="text" required class="form-control input-lg" id="uname"
                                           placeholder="Your Username" value="<?php echo set_value('username'); ?>" name="username">
                                </div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('phone')){
                                        echo form_error ('phone');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-phone"></span><span class="input-text">Telephone&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Telephone" value="<?php echo set_value('phone'); ?>" name="phone"></div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('fax')){
                                        echo form_error ('fax');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-fax"></span><span class="input-text">Fax</span></span>
                                    <input type="text" class="form-control input-lg" placeholder="Your Fax"
                                           value="<?php echo set_value('fax'); ?>" name="fax"></div>
                            </fieldset>
                            <fieldset><h2 class="sub-title">YOUR PASSWORD</h2>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('pass1')){
                                        echo form_error ('pass1');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                    <input type="password" required class="form-control input-lg"
                                           placeholder="Your Password" name="pass1"></div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('pass2')){
                                        echo form_error ('pass2');
                                    }
                                    ?>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                    <input type="password" required class="form-control input-lg"
                                           placeholder="Your Password" name="pass2"></div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset><h2 class="sub-title">YOUR ADDRESS</h2>

                                <div class="text-danger">
                                    <?php
                                    if(form_error ('company')){
                                        echo form_error ('company');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-company"></span><span class="input-text">Company&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Company" value="<?php echo set_value('company'); ?>" name="company"></div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('address1')){
                                        echo form_error ('address1');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-address"></span><span class="input-text">Address 1&#42;</span></span>
                                    <input type="text" class="form-control input-lg" placeholder="Your Address"
                                           value="<?php echo set_value('address1'); ?>" name="address1">
                                </div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('address2')){
                                        echo form_error ('address2');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-address"></span><span class="input-text">Address 2&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Address"
                                           value="<?php echo set_value('address2'); ?>" name="address2"></div>

                                <div class="text-danger">
                                    <?php
                                    if(form_error ('city')){
                                        echo form_error ('city');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-city"></span><span
                                            class="input-text">City&#42;</span></span> <input type="text" required
                                            class="form-control input-lg" placeholder="Your City"
                                          value="<?php echo set_value('city'); ?>" name="city">
                                </div>

                                <div class="text-danger">
                                    <?php
                                    if(form_error ('pcode')){
                                        echo form_error ('pcode');
                                    }
                                    ?>
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-postcode"></span><span class="input-text">Post Code&#42;</span></span>
                                    <input type="text" required class="form-control input-lg"
                                           placeholder="Your Post Code" value="<?php echo set_value('pcode'); ?>" name="pcode"></div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-country"></span><span class="input-text">Country*</span></span>

                                    <?php

                                    $options = array(

                                    'uk' => 'United Kingdom',
                                    'bra' => 'Brazil',
                                    'fra' => 'France',
                                    'it' => 'Italy',
                                    'spn' => 'Spain'


                                    );

                                    $value_selected = array('United Kingdom','Brazil','France','Italy','Spain');

                                     form_dropdown('country' , $options , 'France');

                                    ?>

                                    <div class="large-selectbox form-control clearfix"><select id="country" name="country"
                                                                                  class="selectbox">


                                            <option value="<?php echo form_dropdown('country' , $options , $this->input->post('country'));?>">United Kingdom</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="France" >France</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Spain">Spain</option>

                                        </select></div>
                                </div>
                                <div class="input-group"><span class="input-group-addon"><span
                                            class="input-icon input-icon-region"></span><span class="input-text">Region / State&#42;</span></span>

                                    <?php

                                    $options = array(

                                        'ca' => 'California',
                                        'tex' => 'Texas',
                                        'new' => 'New York',
                                        'nar' => 'Narnia',
                                        'jum' => 'Jumanji'


                                    );

                                    $value_selected = array('California','Texas','New York','Narnia','Jumanji');

                                    form_dropdown('country' , $options , $value_selected);

                                    ?>

                                    <div class="large-selectbox form-control clearfix"><select id="state" name="state"
                                                                                  class="selectbox">
                                            
                                            <option value="<?php echo form_dropdown('state' , $options , $this->input->post('state'));?>">California</option>
                                            <option value="Texas">Texas</option>
                                            <option value="NewYork">NewYork</option>
                                            <option value="Narnia">Narnia</option>
                                            <option value="Jumanji">Jumanji</option>
                                        </select></div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset class="half-margin"><h2 class="sub-title">NEWSLETTER</h2>

                                <div class="input-desc-box"><span class="separator icon-box">&plus;</span>I wish to
                                    subscribe to the Venedor newsletter.
                                </div>
                                <div class="text-danger">
                                    <?php
                                    if(form_error ('checkbox')){
                                        echo form_error ('checkbox');
                                    }
                                    ?>
                                </div>
                                <div class="input-group custom-checkbox"><input type="checkbox" name="checkbox"> <span
                                        class="checbox-container"><i class="fa fa-check"></i></span> I have reed and
                                    agree to the <a href="<?php echo $root; ?>privacy">Privacy Policy</a>.
                                </div>
                            </fieldset>
                            <input type="submit" value="CREATE MY ACCCOUNT" class="btn btn-custom-2 md-margin">
                        </div>
                    </div>
                </form>
      <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<div style="padding: 0 20%">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </tfoot>
    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
    </tr>
    <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
    </tr>
    <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>2009/01/12</td>
        <td>$86,000</td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2012/03/29</td>
        <td>$433,060</td>
    </tr>
    <tr>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>33</td>
        <td>2008/11/28</td>
        <td>$162,700</td>
    </tr>
    <tr>
        <td>Brielle Williamson</td>
        <td>Integration Specialist</td>
        <td>New York</td>
        <td>61</td>
        <td>2012/12/02</td>
        <td>$372,000</td>
    </tr>
    <tr>
        <td>Herrod Chandler</td>
        <td>Sales Assistant</td>
        <td>San Francisco</td>
        <td>59</td>
        <td>2012/08/06</td>
        <td>$137,500</td>
    </tr>
    <tr>
        <td>Rhona Davidson</td>
        <td>Integration Specialist</td>
        <td>Tokyo</td>
        <td>55</td>
        <td>2010/10/14</td>
        <td>$327,900</td>
    </tr>
    <tr>
        <td>Colleen Hurst</td>
        <td>Javascript Developer</td>
        <td>San Francisco</td>
        <td>39</td>
        <td>2009/09/15</td>
        <td>$205,500</td>
    </tr>
    <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>2008/12/13</td>
        <td>$103,600</td>
    </tr>
    <tr>
        <td>Jena Gaines</td>
        <td>Office Manager</td>
        <td>London</td>
        <td>30</td>
        <td>2008/12/19</td>
        <td>$90,560</td>
    </tr>
    <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2013/03/03</td>
        <td>$342,000</td>
    </tr>
    <tr>
        <td>Charde Marshall</td>
        <td>Regional Director</td>
        <td>San Francisco</td>
        <td>36</td>
        <td>2008/10/16</td>
        <td>$470,600</td>
    </tr>
    <tr>
        <td>Haley Kennedy</td>
        <td>Senior Marketing Designer</td>
        <td>London</td>
        <td>43</td>
        <td>2012/12/18</td>
        <td>$313,500</td>
    </tr>
    <tr>
        <td>Tatyana Fitzpatrick</td>
        <td>Regional Director</td>
        <td>London</td>
        <td>19</td>
        <td>2010/03/17</td>
        <td>$385,750</td>
    </tr>
    <tr>
        <td>Michael Silva</td>
        <td>Marketing Designer</td>
        <td>London</td>
        <td>66</td>
        <td>2012/11/27</td>
        <td>$198,500</td>
    </tr>
    <tr>
        <td>Paul Byrd</td>
        <td>Chief Financial Officer (CFO)</td>
        <td>New York</td>
        <td>64</td>
        <td>2010/06/09</td>
        <td>$725,000</td>
    </tr>
    <tr>
        <td>Gloria Little</td>
        <td>Systems Administrator</td>
        <td>New York</td>
        <td>59</td>
        <td>2009/04/10</td>
        <td>$237,500</td>
    </tr>
    <tr>
        <td>Bradley Greer</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>41</td>
        <td>2012/10/13</td>
        <td>$132,000</td>
    </tr>
    <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>2012/09/26</td>
        <td>$217,500</td>
    </tr>
    <tr>
        <td>Jenette Caldwell</td>
        <td>Development Lead</td>
        <td>New York</td>
        <td>30</td>
        <td>2011/09/03</td>
        <td>$345,000</td>
    </tr>
    <tr>
        <td>Yuri Berry</td>
        <td>Chief Marketing Officer (CMO)</td>
        <td>New York</td>
        <td>40</td>
        <td>2009/06/25</td>
        <td>$675,000</td>
    </tr>
    <tr>
        <td>Caesar Vance</td>
        <td>Pre-Sales Support</td>
        <td>New York</td>
        <td>21</td>
        <td>2011/12/12</td>
        <td>$106,450</td>
    </tr>
    <tr>
        <td>Doris Wilder</td>
        <td>Sales Assistant</td>
        <td>Sidney</td>
        <td>23</td>
        <td>2010/09/20</td>
        <td>$85,600</td>
    </tr>
    <tr>
        <td>Angelica Ramos</td>
        <td>Chief Executive Officer (CEO)</td>
        <td>London</td>
        <td>47</td>
        <td>2009/10/09</td>
        <td>$1,200,000</td>
    </tr>
    <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>2010/12/22</td>
        <td>$92,575</td>
    </tr>
    <tr>
        <td>Jennifer Chang</td>
        <td>Regional Director</td>
        <td>Singapore</td>
        <td>28</td>
        <td>2010/11/14</td>
        <td>$357,650</td>
    </tr>
    <tr>
        <td>Brenden Wagner</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>28</td>
        <td>2011/06/07</td>
        <td>$206,850</td>
    </tr>
    <tr>
        <td>Fiona Green</td>
        <td>Chief Operating Officer (COO)</td>
        <td>San Francisco</td>
        <td>48</td>
        <td>2010/03/11</td>
        <td>$850,000</td>
    </tr>
    <tr>
        <td>Shou Itou</td>
        <td>Regional Marketing</td>
        <td>Tokyo</td>
        <td>20</td>
        <td>2011/08/14</td>
        <td>$163,000</td>
    </tr>
    <tr>
        <td>Michelle House</td>
        <td>Integration Specialist</td>
        <td>Sidney</td>
        <td>37</td>
        <td>2011/06/02</td>
        <td>$95,400</td>
    </tr>
    <tr>
        <td>Suki Burks</td>
        <td>Developer</td>
        <td>London</td>
        <td>53</td>
        <td>2009/10/22</td>
        <td>$114,500</td>
    </tr>
    <tr>
        <td>Prescott Bartlett</td>
        <td>Technical Author</td>
        <td>London</td>
        <td>27</td>
        <td>2011/05/07</td>
        <td>$145,000</td>
    </tr>
    <tr>
        <td>Gavin Cortez</td>
        <td>Team Leader</td>
        <td>San Francisco</td>
        <td>22</td>
        <td>2008/10/26</td>
        <td>$235,500</td>
    </tr>
    <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td>2011/03/09</td>
        <td>$324,050</td>
    </tr>
    <tr>
        <td>Unity Butler</td>
        <td>Marketing Designer</td>
        <td>San Francisco</td>
        <td>47</td>
        <td>2009/12/09</td>
        <td>$85,675</td>
    </tr>
    <tr>
        <td>Howard Hatfield</td>
        <td>Office Manager</td>
        <td>San Francisco</td>
        <td>51</td>
        <td>2008/12/16</td>
        <td>$164,500</td>
    </tr>
    <tr>
        <td>Hope Fuentes</td>
        <td>Secretary</td>
        <td>San Francisco</td>
        <td>41</td>
        <td>2010/02/12</td>
        <td>$109,850</td>
    </tr>
    <tr>
        <td>Vivian Harrell</td>
        <td>Financial Controller</td>
        <td>San Francisco</td>
        <td>62</td>
        <td>2009/02/14</td>
        <td>$452,500</td>
    </tr>
    <tr>
        <td>Timothy Mooney</td>
        <td>Office Manager</td>
        <td>London</td>
        <td>37</td>
        <td>2008/12/11</td>
        <td>$136,200</td>
    </tr>
    <tr>
        <td>Jackson Bradshaw</td>
        <td>Director</td>
        <td>New York</td>
        <td>65</td>
        <td>2008/09/26</td>
        <td>$645,750</td>
    </tr>
    <tr>
        <td>Olivia Liang</td>
        <td>Support Engineer</td>
        <td>Singapore</td>
        <td>64</td>
        <td>2011/02/03</td>
        <td>$234,500</td>
    </tr>
    <tr>
        <td>Bruno Nash</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>38</td>
        <td>2011/05/03</td>
        <td>$163,500</td>
    </tr>
    <tr>
        <td>Sakura Yamamoto</td>
        <td>Support Engineer</td>
        <td>Tokyo</td>
        <td>37</td>
        <td>2009/08/19</td>
        <td>$139,575</td>
    </tr>
    <tr>
        <td>Thor Walton</td>
        <td>Developer</td>
        <td>New York</td>
        <td>61</td>
        <td>2013/08/11</td>
        <td>$98,540</td>
    </tr>
    <tr>
        <td>Finn Camacho</td>
        <td>Support Engineer</td>
        <td>San Francisco</td>
        <td>47</td>
        <td>2009/07/07</td>
        <td>$87,500</td>
    </tr>
    <tr>
        <td>Serge Baldwin</td>
        <td>Data Coordinator</td>
        <td>Singapore</td>
        <td>64</td>
        <td>2012/04/09</td>
        <td>$138,575</td>
    </tr>
    <tr>
        <td>Zenaida Frank</td>
        <td>Software Engineer</td>
        <td>New York</td>
        <td>63</td>
        <td>2010/01/04</td>
        <td>$125,250</td>
    </tr>
    <tr>
        <td>Zorita Serrano</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>56</td>
        <td>2012/06/01</td>
        <td>$115,000</td>
    </tr>
    <tr>
        <td>Jennifer Acosta</td>
        <td>Junior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>43</td>
        <td>2013/02/01</td>
        <td>$75,650</td>
    </tr>
    <tr>
        <td>Cara Stevens</td>
        <td>Sales Assistant</td>
        <td>New York</td>
        <td>46</td>
        <td>2011/12/06</td>
        <td>$145,600</td>
    </tr>
    <tr>
        <td>Hermione Butler</td>
        <td>Regional Director</td>
        <td>London</td>
        <td>47</td>
        <td>2011/03/21</td>
        <td>$356,250</td>
    </tr>
    <tr>
        <td>Lael Greer</td>
        <td>Systems Administrator</td>
        <td>London</td>
        <td>21</td>
        <td>2009/02/27</td>
        <td>$103,500</td>
    </tr>
    <tr>
        <td>Jonas Alexander</td>
        <td>Developer</td>
        <td>San Francisco</td>
        <td>30</td>
        <td>2010/07/14</td>
        <td>$86,500</td>
    </tr>
    <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>2008/11/13</td>
        <td>$183,000</td>
    </tr>
    <tr>
        <td>Michael Bruce</td>
        <td>Javascript Developer</td>
        <td>Singapore</td>
        <td>29</td>
        <td>2011/06/27</td>
        <td>$183,000</td>
    </tr>
    <tr>
        <td>Donna Snider</td>
        <td>Customer Support</td>
        <td>New York</td>
        <td>27</td>
        <td>2011/01/25</td>
        <td>$112,000</td>
    </tr>
    </tbody>
</table>
</div>
<?php

include 'inc/footer.inc.php';
include 'inc/footerfiles.inc.php';

?>

<script>
        jQuery(document).ready( function ( $ ) {
            $('#uname').blur( function (){

                var username = $(this).val();

                $.ajax({
                    url: "<?php echo $root; ?>register/ajax_check_user_availability/" + username,

                }).done(function( response ) {
                    if ( response ){
                        $('#Avail').html('User is availabale').show(500);
                        $('#notAvail').html('').hide();
                    }else {
                        $('#notAvail').html('User is not availabale').show(500);
                        $('#Avail').html('').hide();
                    }
                });
            });
        });
</script>




    <script>
        jQuery(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
