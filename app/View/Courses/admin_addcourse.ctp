<?php  print_r($allProfessors) ?>
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
        <small>Add Course</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Courses</a></li>
        <li class="active">Add Courses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section  style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">

      <?php echo $this->Session->flash('admin_course'); ?>
     
        <div class="box-header with-border">
              <h3 class="box-title">Add Courses</h3>
        </div>
       
<div class="box-body">   
<?php echo $this->Form->create('Course',array( 'class'=>'form-horizontal'));?>
        
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-6"> 
        <?php echo $this->Form->input('course_name', array('class' => 'form-control','required','id'=>'course_name')); ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6"> 
        <?php 

            // $professor_name = array( '' => 'Select Professor', 'carls xavier' => 'carls xavier','carls xavier 2' => 'carls xavier 2');  
                    echo $this->Form->input('professor_name',
                        array('class' => 'form-control','options' => $allProfessors, 'default' => 'Select Professor','required'));
        ?>

        </div>
        </div>
       

       <!--  <div class="form-group">
            <div class="col-sm-6">
           <?php //echo $this->Form->input('course_description', array('class' => 'form-control','required','id'=>'course_description','required')); ?>
            </div>
        </div> -->
        <div class="form-group">
            <div class="col-sm-8">
           <textarea required="true" name="data[Course][course_description]" class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> </textarea>
            </div>
        </div>



        <div class="form-group">
          <div class="col-sm-6"> 
          <label for="course_description">Select Sample Video</label>
            <select  class="form-control"  name="data[Course][sample_video_id]"  id ="sample_video" required>
             <option value="">Please Select value</option>
            <?php foreach ($allSamplevideo as $allSamplevideo_val): ?>
            <option value="<?php echo $allSamplevideo_val['Samplevideo']['id']; ?>"><?php echo $allSamplevideo_val['Samplevideo']['video_name'];  ?></option>
            <?php endforeach; ?>
            </select>
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




