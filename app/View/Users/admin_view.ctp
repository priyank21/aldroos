
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>View User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Users</a></li>
        <li class="active">View User</li>
      </ol>
    </section>
    
<section style="padding-top:15px;">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title">User Detail</h3>
</div>
    <div class="box-body">
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
           <tr>
                <th>Name</th>
                <td><?php echo h($user['User']['first_name'] .' '. $user['User']['last_name'] ); ?></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><?php echo h($user['User']['email']); ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo h($user['User']['phone']); ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo h($user['User']['login_name']); ?></td>
            </tr>
           
            <?php if($user['User']['subscription_status'] == 1){ ?>
            <tr>
                <th>Phone</th>
                <td><?php echo h($user['User']['phone']); ?></td>
            </tr>
            <tr>
                <th>Subscription Start Date</th>
                <td><?php echo h($user['User']['subscription_start_date']); ?></td>
            </tr>
            <tr>
                <th>Subscription End Date</th>
                <td><?php echo h($user['User']['subscription_end_date']); ?></td>
            </tr>
            <?php } ?>
        </thead>
    </table>
    </div>
</div>
</div>
<div class="col-sm-6"></div>
</div>
</div>
    
    
</section>
</div>