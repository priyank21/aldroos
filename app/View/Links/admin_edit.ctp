
<style>
/*custom css*/
.overlaybox{
      width: 104%;
    float: left;
    position: absolute;
    height: 100%;
    background: rgba(0, 0, 0, 0.62);
    top: 0;
    right: 0;
    left: -2%;
}
.overlaybox img{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.overlayouter{
    position: relative;
}

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Courses
        <small>Link</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Courses</a></li>
        <li class="active">Add Courses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
 <div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">     
      
      <?php echo $this->Session->flash('admin_link'); ?>
     
        <div class="box-header with-border">
              <h3 class="box-title">Links</h3>
        </div>
 
  <div class="box-body">      
            <?php echo $this->Form->Create('Link', array('action' => 'edit'));?>
        
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-10"> 

        <?php echo $this->Form->input('id'); echo $this->Form->input('name', array('class' => 'form-control','readonly')); ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('link', array('class' => 'form-control'));  ?>
        </div>
        </div>
     
   <div class="form-group">
          <div class="col-sm-10"> 

        <?php  //echo $this->Form->end('Update', array('class' => 'btn btn-primary main_btn padng11'));
        echo $this->Form->button('Submit', array('class' => 'btn btn-primary main_btn padng11 dwn_sbmt','required','id'=>'upload_sample_vd')); ?>
        
        </div>
        </div>
        
        <?php echo $this->Form->end(); ?>
        
       
        
</div>
</div>
</div>
<div class="col-sm-6"></div>
</div>
</div>     

      </section>
      </div>




