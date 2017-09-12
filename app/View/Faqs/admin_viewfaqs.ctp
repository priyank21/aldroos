<?php //pr($testimonial);die(); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FAQ's
        <small>View FAQ's</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">FAQ's</a></li>
         <!-- <li><a href="#">View Testimonail</a></li> -->
        <li class="active">View FAQ's</li>
      </ol>
    </section>
<section style="padding-top:15px;">

<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">


<div class="box-header with-border">
              <h3 class="box-title">FAQ's Detail</h3>
              </div>

<div class="box-body">    
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Question</th>
                <td><?php echo h($data['Faq']['question']); ?></td>
            </tr>
           <tr>
                <th>Answer</th>
                <td><?php echo h($data['Faq']['answer']); ?></td>
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

