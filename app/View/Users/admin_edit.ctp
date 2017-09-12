<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Edit user</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">User</a></li>
        <li class="active">Edit User</li>
      </ol>
    </section>
    
<section style="padding-top:15px;">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title"> Edit User</h3>
</div>
<div class="box-body">
        <?php echo $this->Session->flash('admin_edit'); ?>


        <div class="user_rgstr">
        	<?php echo $this->Session->flash('admin_edit'); ?>
             <div class="form-group">
        	<?php echo $this->Form->create('User'); ?>
            </div>
             <div class="form-group">
			<?php echo $this->Form->input('first_name', array('class' => 'form-control','label'=>'Name')); ?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->input('phone', array('class' => 'form-control','type'=>"number")); ?>
            </div>
            <div class="form-group">
            <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
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