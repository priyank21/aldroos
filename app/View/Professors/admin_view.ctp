
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>View Professor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Professors</a></li>
        <li class="active">View Professor</li>
      </ol>
    </section>
    
<section style="padding-top:15px;">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title">View Professor</h3>
</div>
    <div class="box-body">
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
           <tr>
                <th>Professor Name</th>
                <td><?php echo h($Professor['Professor']['professor_name']); ?></td>
            </tr>

            <tr>
                <th>Professor Description</th>
                <td><?php echo h($Professor['Professor']['professor_description']); ?></td>
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