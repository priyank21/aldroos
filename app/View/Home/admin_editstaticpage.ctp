
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
        Staticpages
        <small>Edit Staticpages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Staticpages</a></li>
        <li class="active">Edit Staticpages</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->Session->flash('admin_testimonials'); ?>
 
 <div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">

        <div class="box-header with-border">
              <h3 class="box-title">Edit
               Staticpages</h3>
        </div>
       
  <div class="box-body">
            <?php echo $this->Form->create('Staticpage',array('type'=>'file', 'class'=>'form-horizontal'));?>
        
        <div class="overlayouter">

        <div class="form-group">
            <div class="col-sm-6">
           <?php echo $this->Form->input('description', array('class' => 'form-control','required','id'=>'testimonial','required','type'=>'text')); ?>
            </div>
        </div>

        <div class="form-group">
          <div class="col-sm-6"> 
          <img id="blah" src="<?php echo $this->webroot. 'image/staticpage_pic/'.$staticpic; ?>" alt="your image" style="height: 20%;
    width: 65%;" />
            <?php echo $this->Form->input('image', array('type' => 'file', 'class' => 'form-control padng11', 'accept'=>"image/*",'id'=>'auther_pic'));  ?>
            
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#auther_pic").change(function(){
    readURL(this);
});

</script>