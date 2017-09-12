

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sample video
        <small>View video info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Sample videos</a></li>
        <li class="active">View Sample Video</li>
      </ol>
    </section>
<section style="padding-top:15px;">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
   
        <div class="box-header with-border">
              <h3 class="box-title">Video Details</h3>
              </div>
 <div class="box-body">     
    <table class="table table-striped table-bordered" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Video Name</th>
                <td><?php echo h($samplevideo['Samplevideo']['video_name']); ?></td>
            </tr>
           <tr>
                <th>Uploaded by</th>
                <td><?php echo h($samplevideo['User']['first_name']); ?></td>
            </tr>

            <tr>
                <th>Status</th>
                <td><?php if($samplevideo['Samplevideo']['status'] == 1){
                	echo 'Active';	
                	}else{
               		echo ' Not active';
                		} ?></td>
            </tr>
            <tr>
                <th>Video preferences</th>
                <td>
                	
                	<?php if($samplevideo['Samplevideo']['main_video'] == 1){
                	echo 'Main Video';	
                	}else{
               		echo 'Normal Video';
                		} ?>
                </td>
            </tr>
            <tr>
                <th>Video</th>
                <td>
  					<?php $file = $samplevideo['Samplevideo']['video_path']; 
    							$get_extension = $id = substr($file, strrpos($file, '.') + 1);
    	 			?>
    				<video width="320" height="240" autoplay>
  					<source src="<?php echo $this->webroot.'videos/sample_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
  					</video>
                </td>
            </tr>
            <tr>
                <th>Video image</th>
                <td>
  					<img style="float: left;width: 100%;" src="<?php echo $this->webroot. 'image/video_images/'.$samplevideo['Samplevideo']['video_image_name']; ?>">              	    
                </td>
            </tr>
        </thead>
    </table>
 </div>
</div>
<div class="col-sm-6"></div>
</div>
</div>    
</section>
</div>

