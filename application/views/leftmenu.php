<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php
                    echo $this->session->userdata('UserName');
                    ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!--      <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div>
              </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class=" treeview">
                <a href="<?php echo base_url(); ?>index.php/dashboard/index">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <!--<i class="fa fa-angle-left pull-right"></i>-->
                    </span>
                
                <ul class="treeview-menu">
                    <!--<li class="active"><a href=""><i class="fa fa-circle-o"></i> Student Dashboard</a></li>-->
                </ul>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo base_url(); ?>index.php/invoice/index">
                    <i class="fa fa-file-pdf-o"></i> <span >Invoice</span>
                    <span class="pull-right-container">
<!--                        <i class="fa fa-angle-left pull-right"></i>-->
                    </span>
                
                <ul class="treeview-menu">
                    <!--<li class="active"><a href=""><i class="fa fa-circle-o"></i> Student Dashboard</a></li>-->
                </ul>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo base_url(); ?>index.php/item/index">
                    <i class="fa fa-sitemap"></i> <span >Item</span>
                    <span class="pull-right-container">
                        <!--<i class="fa fa-angle-left pull-right"></i>-->
                    </span>
                
                <ul class="treeview-menu">
<!--                    <li class="active"><a href=""><i class="fa fa-circle-o"></i> Add Brand</a></li>
                    <li class="active"><a href=""><i class="fa fa-circle-o"></i> Add Item Type</a></li>-->
                </ul>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo base_url(); ?>index.php/supplier/index">
                    <i class="fa fa-users"></i> <span >Supplier</span>
                    <span class="pull-right-container">
                        <!--<i class="fa fa-angle-left pull-right"></i>-->
                    </span>
                
                <ul class="treeview-menu">
                    <!--<li class="active"><a href=""><i class="fa fa-circle-o"></i> Student Dashboard</a></li>-->
                </ul>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo base_url(); ?>index.php/task/index">
                    <i class="fa  fa-tasks"></i> <span>Task</span>
                    <span class="pull-right-container">
                        <!--<i class="fa fa-angle-left pull-right"></i>-->
                    </span>
                
                <ul class="treeview-menu">
                    <!--<li class="active"><a href=""><i class="fa fa-circle-o"></i> Student Dashboard</a></li>-->
                </ul>
                </a>    
            </li>
            <li class=" treeview">
                <a href="<?php echo base_url(); ?>purchaseOrder/index">
                    <i class="fa  fa-tasks"></i> <span>Purchase Order</span>
                    <span class="pull-right-container">
                        <!--<i class="fa fa-angle-left pull-right"></i>-->
                    </span>
                
                <ul class="treeview-menu">
                    <!--<li class="active"><a href=""><i class="fa fa-circle-o"></i> Student Dashboard</a></li>-->
                </ul>
                </a>    
            </li>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
