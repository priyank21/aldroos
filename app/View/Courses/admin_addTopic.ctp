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
        <small>Add Topics</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Course</a></li>
         <li><a href="#"><?php echo ($Chapter['Chapter']['course_name']);  ?></a></li>
         <li><a href="#"><?php echo ($Chapter['Chapter']['chapter_name']);  ?></a></li>
        <li class="active">Add Topic</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->Session->flash('admin_chapter'); ?>
 <div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">


    
        <div class="box-header with-border">
              <h3 class="box-title">Add Topics inside <?php echo ($Chapter['Chapter']['chapter_name']);  ?></h3>
        </div>
        
 <div class="box-body">      
            <?php echo $this->Form->create('Chapter',array('type'=>'file', 'class'=>'form-horizontal'));?>
        
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('chapter_name', array('class' => 'form-control','required','id'=>'chapter_name')); ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('chapter_discription', array('class' => 'form-control padng11','required',"label"=>'Description','type'=>'text' ,'id'=>'chapter_discription'));  ?>
        </div>
        </div>
        


        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('video_name', array('required','type' => 'file', 'class' => 'form-control padng11','label'=>'Upload sample video','accept'=>"video/*",'id'=>'video_names','label'=>'Chapter video'));  ?>
        </div>
        </div>

        
 <div class="overlaybox hidden" id='loader_div'> <img src="<?php echo $this->webroot. 'image/30.gif'; ?>"> </div>
</div>
         <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary main_btn padng11','required','id'=>'upload_chapter_vd')); ?>
        
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
