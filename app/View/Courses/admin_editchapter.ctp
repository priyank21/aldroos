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
        <small>Edit Chapter</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Course</a></li>
         <li><a href="#">Chapters</a></li>
        <li class="active">Edit Chapter</li>
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
              <h3 class="box-title">Edit Chapter </h3>
        </div>
        
 <div class="box-body">      
            <?php echo $this->Form->create('Chapter',array('type'=>'file', 'class'=>'form-horizontal'));?>
        
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('chapter_name', array('class' => 'form-control','required','id'=>'chapter_name')); ?>
        </div>
        </div>
       <!--  <div class="form-group">
          <div class="col-sm-10"> 
        <?php //echo $this->Form->input('chapter_discription', array('class' => 'form-control padng11','required',"label"=>'Description','type'=>'text' ,'id'=>'chapter_discription'));  ?>
        </div>
        </div> -->

         <div class="form-group">
            <div class="col-sm-8">
           <textarea required="true" name="data[Chapter][chapter_discription]" class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $Chapter['Chapter']['chapter_discription']; ?></textarea>
            </div>
        </div>
        


        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('video_name', array('type' => 'file', 'class' => 'form-control padng11','label'=>'Upload sample video','accept'=>"video/*",'id'=>'video_names','label'=>'Chapter video'));  ?>
        </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10"> 
             <?php $file = $Chapter['Chapter']['video_name']; 
                  $get_extension = $id = substr($file, strrpos($file, '.') + 1);
            ?>
            <video width="320" height="240" autoplay>
            <source src="<?php echo $this->webroot.'videos/chapter_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
            </video>
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




