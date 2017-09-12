 <?php //pr($Professor);
  // echo '<pre>';
  // print_r($Course);
//  foreach ($Course['Chapter'] as $key => $Course_data_array):
// 	 foreach ($Course_data_array['Topic'] as $key => $Course_data_array):
// 	 pr($Course_data_array['topic_name']); 
// 	 endforeach;						
// endforeach;
//  die(); ?>
<section class="play-video-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-8 col-sm-8 center-col">
					<div class="syllabus-heading line_cover">
						<h3><span><?php echo $Course['Course']['course_name'];  ?></span></h3>
						<h3><span>with:</span> Prof. <?php echo $Professor['Professor']['professor_name'];  ?></h3>
					</div>
					<div class="content-video">
						<p><?php echo $Professor['Professor']['professor_description'];  ?></p>
					</div>
					<div class="video-play-sec">
						
						<?php $file = $Course['Samplevideo']['video_path']; 
    							$get_extension = $id = substr($file, strrpos($file, '.') + 1);
    	 			?>
    				<video   controls controlsList="nodownload">
  					<source src="<?php echo $this->webroot.'videos/sample_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
  					</video>


					</div>
					<div class="info-sec">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">Table of Contents</a></li>
							<li><a data-toggle="tab" href="#menu1">Course Details</a></li>
							<li><a data-toggle="tab" href="#menu2">About Prof. <?php echo $Professor['Professor']['professor_name'];  ?></a></li>
						</ul>
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<!-- <div class="top-sec">
									<form class="search-sec">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search Course Syllabus" name="fn">
											<input type="submit" class="btn btn-primary btn-search" value="Search">
										</div>
									</form>
								</div> -->
								<div class="bottom-sec">
								<?php foreach ($Course['Chapter'] as $key => $Course_data_array): ?>	

									<div class="syllabus-outer">						<h4><a href="<?php echo $this->webroot . 'courses/accessCourse/'.$Course_data_array['id']; ?>"><span><?php echo ++$key; ?>.</span> <?php  echo($Course_data_array['chapter_name']);  ?></h4></a>
										<div class="index-content">
											<!-- <p class="syllabus-title"><a href="#"></a></p> -->
											<ul class="syllabus-wrap">
											<?php foreach ($Course_data_array['Topic'] as $key => $Course_data_arrays): ?>
												
												 <li><a href="<?php echo $this->webroot . 'courses/accessCourse/'.$Course_data_array['id']; ?>"  onclick="hello('<?php echo $Course_data_arrays['topic_timing'] ?>')" ><?php echo $Course_data_arrays['topic_name']; ?> <span><?php echo $Course_data_arrays['topic_timing']; ?></span></a></li> 
												<?php endforeach; ?>
												  
											</ul>
										</div>
									</div>
								<?php endforeach; ?>	



								</div>
							</div><!-- End Here -->
							<div id="menu1" class="tab-pane fade">
								<div class="details-sec">
									<!-- <h4>Duration: <span>8 hours, 55 minutes</span></h4> -->
									<h4>Number Of Lessons: <span><?php echo $numCourse; ?></span></h4>
									<p><?php echo $Course['Course']['course_description'];  ?></p>
									<!-- <h4>Additional Features:</h4>
									<ul>
										<li>Additional Features List Here</li>
										<li>Additional Features List Here</li>
										<li>Additional Features List Here</li>
									</ul>
									<h4>Topics Include:</h4>
									<ul>
										<li>Additional Features List Here</li>
										<li>Additional Features List Here</li>
										<li>Additional Features List Here</li>
									</ul> -->
								</div>
							</div>
							<div id="menu2" class="tab-pane fade">
								<div class="last-details">
									<p><?php echo $Professor['Professor']['professor_description'];  ?></p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Here -->