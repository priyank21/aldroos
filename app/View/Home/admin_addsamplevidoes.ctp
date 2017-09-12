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
        Sample Videos
        <small>Add Video</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Sample Videos</a></li>
        <li class="active">Add Video</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->Session->flash('admin_samplevideo'); ?>
      
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
   
        <div class="box-header with-border">
              <h3 class="box-title">Add Sample Video</h3>
        </div>
<div class="box-body">      

       
            <?php echo $this->Form->create('Samplevideo',array('type'=>'file', 'class'=>'form-horizontal'));?>
        
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('video_name', array('class' => 'form-control','required','id'=>'v_name')); ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('video_description', array('class' => 'form-control padng11','id'=>'v_desc'));  ?>
        </div>
        </div>
        <!-- <div class="form-group">
          <div class="col-sm-10"> 
        <?php //echo $this->Form->input('status', array('class' => 'form-control', 'options' => array('0' => 'Inactive', '1' => 'Active'))); ?>
        </div>
        </div> -->

        <div class="form-group">
            <div class="col-sm-10">
            <label for="SamplevideoStatus">Make Main Video</label> <br>
            <?php echo $this->Form->radio('main_video', array(
                '1' => 'Yes',
                '0' => 'No',
                ), 
                array(
                'legend' => false,
                'value' => '0',
                'required'=>true,    
                )
            );?>
            </div>
        </div>


        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('video_path', array('required','type' => 'file', 'class' => 'form-control padng11','label'=>'Upload sample video','accept'=>"video/*",'id'=>'v_file'));  ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('video_image_name', array('type' => 'file', 'class' => 'form-control padng11','label'=>'Upload sample video image','required', 'accept'=>"image/*",'id'=>'v_image'));  ?>
        </div>
        </div>
        <!-- <div class="form-group">
          <div class="col-sm-10"> 
        <?php //echo $this->Form->input('status', array('class' => 'form-control', 'options' => array('0' => 'Main video', '1' => 'Normal sample video'))); ?>
        </div>
        </div> -->

        <div class="form-group">
            <div class="col-sm-10">
            <label for="Status">Status</label> <br>
            <?php echo $this->Form->radio('status', array(
                '1' => 'Active',
                '0' => 'Deactive',
                ), 
                array(
                'legend' => false,
                'value' => '1',
                'required'=>true,    
                )
            );?>
            </div>
        </div>
 <div class="overlaybox hidden" id='loader_div'> <img src="<?php echo $this->webroot. 'image/30.gif'; ?>"> </div>
</div>
         <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary main_btn padng11','required','id'=>'upload_sample_vd')); ?>
        
        </div>
        </div>
        
        <?php echo $this->Form->end(); ?>
        
       
 </div>
</div>
<div class="col-sm-6"></div>
</div>
</div>    

      </section>
      </div>




