<div id="header-top">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-top-left">
                    <ul id="top-links" class="clearfix">
                        <li><a href="<?php echo $root; ?>" title="My Wishlist"><span
                                    class="top-icon top-icon-pencil"></span><span
                                    class="hide-for-xs">My Wishlist</span></a></li>
                        <li><a href="<?php echo $root; ?>login" title="My Account"><span
                                    class="top-icon top-icon-user"></span><span
                                    class="hide-for-xs">My Account</span></a></li>
                        <li><a href="<?php echo $root; ?>cart
                                " title="My Cart"><span
                                    class="top-icon top-icon-cart"></span><span
                                    class="hide-for-xs">My Cart</span></a></li>
                        <li><a href="<?php echo $root; ?>checkout" title="Checkout"><span
                                    class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a>
                        </li>
                    </ul>
                </div>
                <div class="header-top-right">
                    <div class="header-top-dropdowns pull-right">
                        <div class="btn-group dropdown-money">
                            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                <span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="<?php echo $root; ?>"><span class="hide-for-xs">Euro</span><span
                                            class="hide-for-lg">&euro;</span></a></li>
                                <li><a href="<?php echo $root; ?>"><span class="hide-for-xs">Pound</span><span
                                            class="hide-for-lg">&pound;</span></a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown-language">
                            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="flag-container"><img src="<?php echo $root; ?>assets/images/england-flag.png"
                                                                          alt="flag of england"></span> <span
                                    class="hide-for-xs">English</span></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="<?php echo $root; ?>"><span class="flag-container"><img
                                                src="<?php echo $root; ?>assets/images/italy-flag.png" alt="flag of england"></span><span
                                            class="hide-for-xs">Italian</span></a></li>
                                <li><a href="<?php echo $root; ?>"><span class="flag-container"><img
                                                src="<?php echo $root; ?>assets/images/spain-flag.png" alt="flag of italy"></span><span
                                            class="hide-for-xs">Spanish</span></a></li>
                                <li><a href="<?php echo $root; ?>"><span class="flag-container"><img
                                                src="<?php echo $root; ?>assets/images/france-flag.png" alt="flag of france"></span><span
                                            class="hide-for-xs">French</span></a></li>
                                <li><a href="<?php echo $root; ?>"><span class="sm-separator"><img
                                                src="<?php echo $root; ?>assets/images/germany-flag.png" alt="flag of germany"></span><span
                                            class="hide-for-xs">German</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-text-container pull-right"><p class="header-text">Welcome to Venedor!</p>

                        <p class="header-link"><a href="<?php echo $root; ?>logout">logout</a>&nbsp;| <?php echo $this->session->userdata('username'); ?></p></div>
                </div>
            </div>
        </div>
    </div>
</div>
