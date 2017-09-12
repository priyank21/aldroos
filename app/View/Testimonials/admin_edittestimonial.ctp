
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
        Testimonials
        <small>Edit Testimonials</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Testimonials</a></li>
        <li class="active">Edit Testimonials</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->Session->flash('admin_testimonial'); ?>
 
 <div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
   
        <div class="box-header with-border">
              <h3 class="box-title">Edit Testimonial</h3>
        </div>
 
       
            <?php echo $this->Form->create('Testimonial',array('type'=>'file', 'class'=>'form-horizontal'));?>
   <div class="box-body">      
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-6"> 
        <?php echo $this->Form->input('Auther_name', array('class' => 'form-control','required','id'=>'Auther_name')); ?>
        </div>
        </div>
        

        <div class="form-group">
            <div class="col-sm-6">
           <?php echo $this->Form->input('testimonial_desc', array('class' => 'form-control','required','id'=>'testimonial','required','type'=>'text')); ?>
            </div>
        </div>


        <div class="form-group">
          <div class="col-sm-6"> 
            <?php echo $this->Form->input('auther_pic', array('type' => 'file', 'class' => 'form-control padng11', 'accept'=>"image/*",'id'=>'auther_pic'));  ?>
            
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
          <img src="<?php echo $this->webroot. 'image/auther_pic/'.$Testimonial['Testimonial']['auther_pic']; ?>"> 
          </div>
          </div>
      
         <div class="form-group">
          <div class="col-sm-6"> 
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary main_btn padng11','required')); ?>
        
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




