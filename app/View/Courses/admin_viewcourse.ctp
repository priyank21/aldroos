
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course
        <small>Courses</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Course</a></li>
        <li class="active">View Course</li>
      </ol>
    </section>
<section  style="padding-top:15px;">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">
<div class="box-body">
	
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Course Name</th>
                <td><?php echo h($Course_data_array['Course']['course_name']); ?></td>
            </tr>
           <tr>
                <th>Professor Name</th>
                <td><?php echo h($Course_data_array['Course']['professor_name']); ?></td>
            </tr>
            <tr>
                <th>Course Description</th>
                <td><?php echo h($Course_data_array['Course']['course_description']); ?></td>
            </tr>

            
           
                <th>Video</th>
                <td>
  					<?php $file = $Course_data_array['Samplevideo']['video_path']; 
    							$get_extension = $id = substr($file, strrpos($file, '.') + 1);
    	 			?>
    				<video width="320" height="240" autoplay>
  					<source src="<?php echo $this->webroot.'videos/sample_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
  					</video>
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
