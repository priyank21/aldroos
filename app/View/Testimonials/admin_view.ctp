<?php //pr($testimonial);die(); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonail
        <small>View Testimonail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Testimonail</a></li>
         <!-- <li><a href="#">View Testimonail</a></li> -->
        <li class="active">View Testimonail</li>
      </ol>
    </section>
<section style="padding-top:15px;">

<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">


<div class="box-header with-border">
              <h3 class="box-title">Testimonail Detail</h3>
              </div>

<div class="box-body">    
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Author  Name</th>
                <td><?php echo h($testimonial['Testimonial']['Auther_name']); ?></td>
            </tr>
           <tr>
                <th>Testimonial Description</th>
                <td><?php echo h($testimonial['Testimonial']['testimonial_desc']); ?></td>
            </tr>
           
            <tr>
                <th>Author Picture</th>
                <td>
  					       <img style="width:100%;float:left;" src="<?php echo $this->webroot. 'image/auther_pic/'.$testimonial['Testimonial']['auther_pic']; ?>">    
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

