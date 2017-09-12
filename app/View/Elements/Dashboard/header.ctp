
<body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a style="padding:4px 0;height: auto;line-height: 0px;" href="<?= $this->request->webroot ?>admin/dashboards/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>Dashboard</b></span>
      logo for regular state and mobile devices
      <span class="logo-lg"><b>Dashboard</b></span> -->
      <img src="<?php echo $this->webroot. 'image/logo.png'; ?>">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
         
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= $this->request->webroot ?>image/profile_pic/defult.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user_data['first_name'] . ' '.$user_data['last_name'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= $this->request->webroot ?>image/profile_pic/defult.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user_data['first_name'] . ' '.$user_data['last_name'] ?> -Admin
                  
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?= $this->request->webroot ?>admin/Users/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>