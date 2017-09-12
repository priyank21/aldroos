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
        Subscriptions
        <small>Add Subscriptions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Subscriptions</a></li>
        <li class="active">Add Subscriptions</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="padding-top:15px;">
      <!-- Small boxes (Stat box) -->
      
      <div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">

      <?php echo $this->Session->flash('admin_subscription'); ?>
     
        <div class="box-header with-border">
              <h3 class="box-title">Add Subscription</h3>
        </div>
       
 <div class="box-body"> 
 <?php echo $this->Form->create('Subscription',array('class'=>'form-horizontal'));?>
        
        <div class="overlayouter">
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('subscription_plan_name', array('class' => 'form-control','required','id'=>'s_name','placeholder'=>'Like:Basic,Top Seller,etc')); ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('subscription_duration', array('class' => 'form-control padng11','id'=>'s_duration','placeholder'=>'Like: 1 month,6 month,etc','required'));  ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('subscription_monthly_rate', array('class' => 'form-control padng11','id'=>'s_duration' ,'placeholder'=>'Like: 45,50 etc','required'));  ?>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->input('subscription_ monthly thereafter', array('class' => 'form-control padng11','id'=>'s_duration','placeholder'=>'Like: 45, 50 etc','required'));  ?>
        </div>
        </div>
        
        
        </div>
         <div class="form-group">
          <div class="col-sm-10"> 
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary main_btn padng11','required','id'=>'upload_sample_vd')); ?>
        
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




