<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= $this->request->webroot ?>image/profile_pic/defult.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user_data['first_name'] . ' '.$user_data['last_name'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?= $this->request->webroot ?>admin/dashboards/index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . ' Users', array('controller' => 'users', 'action' => 'index', 'admin' => true), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Add User', array('controller' => 'users', 'action' => 'add', 'admin' => true), array('escape' => false)); ?></li>
            <!-- <li><?php //echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Genrate PrePaid User', array('controller' => 'users', 'action' => 'PrePaiduser', 'admin' => true), array('escape' => false)); ?></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Testimonials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Testimonials', array('controller' => 'testimonials', 'action' => 'index', 'admin' => true), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Add Testimonials', array('controller' => 'testimonials', 'action' => 'add', 'admin' => true), array('escape' => false)); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Professors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'All Professors', array('controller' => 'Professors', 'action' => 'index', 'admin' => true), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Add Professors', array('controller' => 'Professors', 'action' => 'add', 'admin' => true), array('escape' => false)); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sample Videos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Sample Videos', array('controller' => 'home', 'action' => 'samplevideos', 'admin' => true), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Add Sample Video', array('controller' => 'home', 'action' => 'addsamplevidoes', 'admin' => true), array('escape' => false)); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Subscriptions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Subscription', array('controller' => 'Subscriptions', 'action' => 'subscriptionall', 'admin' => true), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Add Subscription', array('controller' => 'Subscriptions', 'action' => 'addsubscription', 'admin' => true), array('escape' => false)); ?></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'All Courses', array('controller' => 'Courses', 'action' => 'index', 'admin' => true), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Add Courses', array('controller' => 'Courses', 'action' => 'addcourse', 'admin' => true), array('escape' => false)); ?></li>
          </ul>
        </li>
        <li class="treeview">
                    <a href="#">
                        <i class="fa fa-link" aria-hidden="true"></i>

                        <span>Links</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">                 
                        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-angle-double-right')) . ' Links', array('controller' => 'links', 'action' => 'index', 'admin' => true), array('escape' => false)); ?></li>


                    </ul>
                </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Staticpages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'All Staticpages', array('controller' => 'Home', 'action' => 'showstaticpage', 'admin' => true), array('escape' => false)); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>FAQ'S</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'All FAQ', array('controller' => 'faqs', 'action' => 'showfaqs', 'admin' => true), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-circle-o')) . 'Add FAQ', array('controller' => 'faqs', 'action' => 'addfaqs', 'admin' => true), array('escape' => false)); ?></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>