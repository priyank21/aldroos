

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
<section class="content-header">
	<h1>Video Detail</h1>
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Auther  Name</th>
                <td><?php echo h($Chapter_data_array['Chapter']['chapter_name']); ?></td>
            </tr>
           <tr>
                <th>Testimonial Description</th>
                <td><?php echo h($Chapter_data_array['Chapter']['chapter_discription']); ?></td>
            </tr>
            <tr>
                <th>Course Name</th>
                <td><?php echo h($Chapter_data_array['Chapter']['course_name']); ?></td>
            </tr>
            <tr>
                <th>Auther Picture</th>
                <td>
  					<?php $file = $Chapter_data_array['Chapter']['video_name']; 
    							$get_extension = $id = substr($file, strrpos($file, '.') + 1);
    	 			?>
    				<video width="320" height="240" autoplay>
  					<source src="<?php echo $this->webroot.'videos/chapter_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
  					</video>
                </td>
            </tr>
            
        </thead>
    </table>

</section>  

