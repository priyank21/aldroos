<?php //pr($testimonial);die(); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staticpage
        <small>View Staticpage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Staticpage</a></li>
         <!-- <li><a href="#">View Testimonail</a></li> -->
        <li class="active">View Staticpage</li>
      </ol>
    </section>
<section style="padding-top:15px;">

<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">


<div class="box-header with-border">
              <h3 class="box-title">Staticpage Detail</h3>
              </div>

<div class="box-body">    
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Page Name</th>
                <td><?php echo h($staticpage['Staticpage']['title']); ?></td>
            </tr>
           <tr>
                <th>Staticpage Description</th>
                <td><?php echo h($staticpage['Staticpage']['description']); ?></td>
            </tr>
           
            <tr>
                <th>Staticpage Picture</th>
                <td>
  					       <img style="width:100%;float:left;height:45%;" src="<?php echo $this->webroot. 'image/staticpage_pic/'.$staticpage['Staticpage']['image']; ?>">    
                </td>
            </tr>
            
        </thead>
    </table>



        
</div>
</div>
</div>
<div class="col-sm-6"></div>
</div>
</div>

</section> 
</div>