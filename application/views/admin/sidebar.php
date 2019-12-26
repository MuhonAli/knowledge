
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?=base_url()?>Admin_dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Manage_products"><i class="fa fa-circle-o"></i>Manage Products</a></li>
            <li><a href="<?=base_url()?>Manage_products/add_product"><i class="fa fa-circle-o"></i> Add New Products</a></li>
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Categories"><i class="fa fa-circle-o"></i> Manage Categories</a></li>
            <li><a href="<?=base_url()?>Categories/add_categories"><i class="fa fa-circle-o"></i> Add Category</a></li>
          </ul>
        </li>
          
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Order/pending_orders"><i class="fa fa-circle-o"></i>Pending Orders</a></li>
            <li><a href="<?=base_url()?>Order/delivered_orders"><i class="fa fa-circle-o"></i> Deliver Orders</a></li>
            <li><a href="<?=base_url()?>Order/cancelled_orders"><i class="fa fa-circle-o"></i> Cancelled Orders</a></li>
          </ul>
        </li> 
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Users/index"><i class="fa fa-circle-o"></i> Manage Users</a></li>
          </ul>
        </li>    
          
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Users/messages"><i class="fa fa-circle-o"></i>User Messages</a></li>
          </ul>
        </li> 
          
     
    </section>
    <!-- /.sidebar -->
  </aside>
