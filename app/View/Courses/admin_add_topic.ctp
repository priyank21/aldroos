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
      <?php echo $this->Session->flash('admin_topic'); ?>
 <div class="container">
<div class="row">
<div class="col-sm-12">
<div class="box">


    
        <div class="box-header with-border">
              <h3 class="box-title">Add Topics inside <?php echo ($Chapter['Chapter']['chapter_name']);  ?></h3>
        </div>
     
 <div class="box-body">   
        <div class="form-group">
          <div class="col-sm-10"> 
             <?php $file = $Chapter['Chapter']['video_name']; 
                  $get_extension = $id = substr($file, strrpos($file, '.') + 1);
            ?>
            <video width="320" height="240" autoplay controls>
            <source src="<?php echo $this->webroot.'videos/chapter_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
            </video>
        </div>
        </div>




            <?php echo $this->Form->create('Topic',array('type'=>'file', 'class'=>'form-horizontal'));?>
      <div id="room_fileds">
        <div>
              <div class="col-sm-5"> 
                <div class="form-group">
                  <div class="input text">
                    <label for="topic_name">Topic Name 1</label>
                    <input name="data[Topic][topic_name][]" class="form-control" required="required" id="topic_name" type="text">
                  </div>               
                </div>
              </div>
              <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group">
                  <div class="input text">
                    <label for="topic_timing">Topic Timing 1</label>
                      <!-- <input name="data[Chapter][topic_timing][]" class="form-control" required="required" id="topic_timing" type="text"> -->
                      <input type="text" name="data[Topic][topic_timing][]" class="form-control" required="required" placeholder="00:00:00">
                  </div>                
                </div>
              </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10"> 
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary main_btn padng11','required','id'=>'upload_chapter_vd')); ?>
          <input type="button" class="btn btn-primary" id="more_fields" onclick="add_fields();" value="Add More" />  
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




