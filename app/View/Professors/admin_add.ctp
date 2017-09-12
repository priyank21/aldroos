
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
        Professors
        <small>Add Professor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Professors</a></li>
        <li class="active">Add Professor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->Session->flash('admin_addProfessor'); ?>
 
 <div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
   
        <div class="box-header with-border">
              <h3 class="box-title">Add Professor</h3>
        </div>
 
       
            <?php echo $this->Form->create('Professor',array('type'=>'file', 'class'=>'form-horizontal'));?>
   <div class="box-body">      
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-6"> 
        <?php echo $this->Form->input('professor_name', array('class' => 'form-control','required','id'=>'professor_name', 'type'=>'text')); ?>
        </div>
        </div>
        

        <div class="form-group">
            <div class="col-sm-8">
            <label for="professor_name">Professor Description</label>
           <textarea name="data[Professor][professor_description]" class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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

      