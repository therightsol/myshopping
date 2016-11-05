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
                    <li>
                        <a href="<?php echo $root; ?>"> Product <span class="fa arrow"></span> </a>
                        <ul class="nav nav-secnd-left">
                            <li>
                                <a href="<?php echo $root; ?>dashboard/add_product">ADD Product</a>
                            </li>
                            <li>
                                <a href="#">Delete Product</a>
                            </li>
                            <li>
                                <a href="#">  Update Product</a>
                            </li>
                            <li>
                                <a href="#">Create Product</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo $root; ?>dashboard/dashboardlogin">Login Page</a>
            </li>

        </ul>

    </div>
    <!-- /.sidebar-collapse -->
</div>