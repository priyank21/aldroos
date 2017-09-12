<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Professor
        <small>Edit Professor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Professors</a></li>
        <li class="active">Edit Professor</li>
      </ol>
    </section>
    
<section style="padding-top:15px;">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title"> Edit Professor</h3>
</div>
<div class="box-body">
        <?php echo $this->Session->flash('admin_addProfessor'); ?>


        <div class="user_rgstr">
        	<?php echo $this->Session->flash('admin_addProfessor'); ?>
             <div class="form-group">
        	<?php echo $this->Form->create('Professor'); ?>
            </div>
             <div class="form-group">
			<?php echo $this->Form->input('professor_name', array('class' => 'form-control')); ?>
            </div>
             <div class="form-group">
            <?php echo $this->Form->input('professor_description', array('class' => 'form-control')); ?>
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