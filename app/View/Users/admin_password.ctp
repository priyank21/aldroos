<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Utilities
        <small>Change Password</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Utilities</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>
<section style="padding-top:15px;">

<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title">Change Password</h3>
</div>
<div class="box-body">
         <div class="user_rgstr">
        	<?php echo $this->Session->flash('admin_pass'); ?>
             <div class="form-group">
            <label class="user_name">Username : <?php echo $this->Form->value('User.username'); ?></label>
            </div>
             <div class="form-group">
        	<?php echo $this->Form->create('User');?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->input('password', array('class' => 'form-control', 'value' => '')); ?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
            </div>
            <?php echo $this->Form->end(); ?>
		</div>
        </div>

</div>
</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
</div>