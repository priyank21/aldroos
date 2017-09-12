
<section class="sample-video-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12 no-padding">
			<h3 class="course_video">Course Videos</h3>
		<?php foreach ($samplevideo as $Samplevideo_data_array): ?>	
				<div class="col-sm-3 col-md-3">
					<div class="video-wrap">
						<div class="video-top">
							<figure>
								<a href="<?php echo $this->webroot . 'home/courseSamplevideo/'.$Samplevideo_data_array['Samplevideo']['id']; ?>">
									<img src="<?php echo $this->webroot. 'image/video_images/'.$Samplevideo_data_array['Samplevideo']['video_image_name']; ?>" alt="Video">
								</a>
							</figure>
						</div>
						<div class="video-bottom">
							<h5><?php  $a = $Samplevideo_data_array['Samplevideo']['video_name'];  $out = strlen($a) > 16 ? substr($a,0,16)."..." : $a;// 7
                                echo($out);  ?></h5>
							<div class="btn-sec">
								<a href="<?php echo $this->webroot . 'home/courseSamplevideo/'.$Samplevideo_data_array['Samplevideo']['id']; ?>" class="btn btn-primary btn-watch">Watch Now</a>
							</div>
						</div>
					</div>
				</div>
		 <?php endforeach; ?>	
			<!-- 	<div class="col-sm-3 col-md-3">
					<div class="video-wrap">
						<div class="video-top">
							<figure>
								<a href="#">
									<img src="/droos/image/video_images/010334072807download.jpg" alt="Video">
								</a>
							</figure>
						</div>
						<div class="video-bottom">
							<h5>Video Title Here</h5>
							<div class="btn-sec">
								<a href="#" class="btn btn-primary btn-watch">Watch Now</a>
							</div>
						</div>
					</div>
				</div> -->
				
				
			</div>
		</div>
		   <?php echo $this->element('pagination-counter'); ?>
<?php echo $this->element('pagination'); ?>
	</div>
</section><!-- End Here -->