<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>Genrate PrePaid User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Users</a></li>
        <li class="active">Genrate PrePaid User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->Session->flash('auto_gen_users'); ?>
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-body">        
    <div class="user_rgstr">
    
      <div class="form-horizontal" >
          <!-- errormessage class -->
           <span id="msg_blocks_auto_gen" class="help-block hidden">
              <div class="alert  alert-dismissible" id="alrt_classs_auto_gen" role="alert">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <small id="alert_msgs_auto_gen"><i class="icon fa fa-check"></i> </small>
              </div>
          </span>

        <div class="form-group">
          <label class="control-label col-sm-2" for="login_limit">Login Limit:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="login_limit" value="100" name="login_limit" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="user_number">User Number</label>
          <div class="col-sm-10">
            <input type="number" value="10" class="form-control" id="user_number" placeholder="Enter Some number here" name="user_number" required>
          </div>
        </div>
       


    
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button class="btn btn-primary" id="sbmt_auto" type='button'>Genrate</button>
            
          </div>
        </div>
     </div>
        
    </div>
</div>
</div>
<div class="col-sm-6"></div>
</div>
</div>

      </section>
      </div>




