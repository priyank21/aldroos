<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Users</a></li>

      </ol>
    </section>
<section class="content-header">
	<h1>Edit user</h1>
    <?php echo $this->Session->flash('admin_edit'); ?>
    <div class="row">
    	<div class="col-md-6">
        <div class="user_rgstr">
        	<?php echo $this->Session->flash('admin_edit'); ?>
             <div class="form-group">
        	<?php echo $this->Form->create('User'); ?>
            </div>
             <div class="form-group">
			<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->input('phone', array('class' => 'form-control', 'type' => 'tel')); ?>
            </div>
            <div class="form-group">
            <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
            <?php echo $this->Form->end(); ?>
		</div>
        </div>
	</div>
</section>
</div>