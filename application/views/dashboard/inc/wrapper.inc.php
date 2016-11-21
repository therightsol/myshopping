



<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class=F"navbar-brand" href="<?php echo $root; ?>dashboard" style="display: block;color: #0a0a0a;font-size: 1.5em;margin-top: 15px;margin-left: 15px">TRS</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">

                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $root ?>home">

                    <i class="fa fa-home fa-fw" href="<?php echo $root ?>home"></i>

                </a>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search.">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i> Website Settings <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $root; ?>dashboard/setting"> Settings </a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="<?php echo $root; ?>"><i class="fa fa-user fa-fw"></i> Users <span class="fa arrow"></span> </a>
                        <ul class="nav nav-secnd-left">
                            <li>
                                <a href="<?php echo $root; ?>dashboard/add_user">Add User</a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>dashboard/delete_user">Delete User</a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>dashboard/update_user">  Update User</a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>dashboard/view_user">View User</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo $root; ?>"><i class="fa fa-shopping-cart fa-fw"></i> Product <span class="fa arrow"></span> </a>
                        <ul class="nav nav-secnd-left">
                            <li>
                                <a href="<?php echo $root; ?>dashboard/add_product">Add Product</a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>dashboard/delete_product">Delete Product</a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>dashboard/update_product">  Update Product</a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>dashboard/view_product">View Product</a>
                            </li>
                        </ul>
                    </li>

                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="<?php echo $root; ?>dashboard/dashboardlogout">Logout</a>
                    </li>

                        </ul>

            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
</div>