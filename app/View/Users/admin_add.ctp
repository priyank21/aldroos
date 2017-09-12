<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>Add users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Users</a></li>
        <li class="active">Add User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->Session->flash('admin_add'); ?>
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-body">        
    <div class="user_rgstr">
    
      <form class="form-horizontal" method="post" action="<?php echo $this->webroot ?>admin/users/add">
      
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="data[User][name]" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="data[User][email]" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-10">          
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="data[User][password]" required>
            <div class="alert-warning" id= "passerror" style="display:none;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="conpwd">Confirm Password:</label>
          <div class="col-sm-10">          
            <input type="password" class="form-control" id="conpwd" placeholder="Enter confirm password" name="data[User][conpwd]" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Phone:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="data[User][phone]" required maxlength="15">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Status</label>
          <div class="col-sm-10">
            <select name="data[User][status]" class="form-control" required="required" id="status">
              
              <option value="1">Active</option>
              <option value="0">Deactive</option>
            </select>
          </div>
        </div>


    
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-primary" id="sbmt">
          </div>
        </div>
     </form>
        
    </div>
</div>
</div>
<div class="col-sm-6"></div>
</div>
</div>

      </section>
      </div>




