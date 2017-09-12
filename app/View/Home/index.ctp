<!--video-section-->
<div class="video_section">
    <!-- <iframe width="100%" height="450px" src="<?php //echo $main_video; ?>" frameborder="0" allowfullscreen autoplay></iframe> -->
    <video  id="myvideo" width="100%" height="450px" autoplay loop>
      <source type="video/<?php echo $main_video_extension; ?>" src="<?php echo $main_video; ?>" />
    </video>
    <!-- <video width="100%" height="450px" autoplay >
            <source src="<?php //echo $main_video; ?>" type="video/<?php //echo $main_video_extension; ?>">
    </video> 
 -->

</div>
<!-- 
<?php// pr($other_sample_video);die(); ?> -->
<div class="form_section">
<div class="container">
	<div class="search_banner">
    	<form id="formoid" action="<?php echo $this->webroot."home/search";?>" method="post">
        <input type="text" name="search" id="search" placeholder="What do you want to learn today?">
        <input type="submit" id="submitButton" name="submitButton" value="SEARCH COURSE">
      </form>

    	</div>
	</div>
 </div>
  <p id="msgflash"></p>
  <div class="container">
    <div class="row">
      <div id="showsearch" class="col-md-12 no-padding">
      </div>
    </div>
  </div>

<!--waht-section-->
<div class="what_section">
<h2>WATCH A SIMPLE LECTURE</h2>

<p>PROFESSIONALS TUTORS</p>
	<div class="container">
    	<div class="row slide_product">
        <div class="bxslider cover_what" id="bxsliders">
        
                <?php foreach ($other_sample_video as $other_sample_video_array): ?>

              <div class="what_video">

      <a class="" href="<?php echo $this->webroot . 'home/courseSamplevideo/'.$other_sample_video_array['Samplevideo']['id']; ?>"><img src="<?php echo $this->webroot. 'image/video_images/'.$other_sample_video_array['Samplevideo']['video_image_name']; ?>"></a>
      
        <h3><?php  $a = $other_sample_video_array['Samplevideo']['video_name'];  $out = strlen($a) > 14 ? substr($a,0,14)."..." : $a;  echo h($out);  ?></h3>
        
        <a class="" href="<?php echo $this->webroot . 'home/courseSamplevideo/'.$other_sample_video_array['Samplevideo']['id']; ?>"><button class="alert-danger sub_watch">Watch Now</button></a>
                  </div>

            <?php endforeach; ?>
        	</div>
    	</div>
	</div>
</div>
<!--membership-section-->
<div class="member_Section">
<h2>MEMBERSHIP OVERVIEW</h2>
<p>24*7 UNLIMITED ACCESS TO OUR ENTIRE LIBRARY</p>
<div class="member_bck">
	<div class="container">
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
       <div class="member_cover">
       <ul>
       <li><i class="fa fa-check" aria-hidden="true"></i><h4>Get unlimited access to over 100 high school,AP and college courses</h4></li>
       <li><i class="fa fa-check" aria-hidden="true"></i><h4>Learn from excellent teachers who are passionate about teaching</h4></li>
       <li><i class="fa fa-check" aria-hidden="true"></i><h4>Save time and jump to your problem topic with our searchable lessons</h4></li>
       <li><i class="fa fa-check" aria-hidden="true"></i><h4>Ask questions to our community and teachers </h4></li>
       <li><i class="fa fa-check" aria-hidden="true"></i><h4>Practice with example problems, downloadable slides, and lesson notes</h4></li>
       	</ul>
            <center><a href="<?php echo $this->webroot . 'users/subscriptionpage'; ?>"> <button class="alert-danger sub_subscrip">Start Subscription</button></a></center>
        	</div>
    	</div>
        </div>
        </div>
	</div>
  </div>
<!---testimonial-section-->
<div class="member_Section">
<h2>TESTIMONIALS</h2>
<p>AUTHORS VIEW</p>
	<div class="container">
       <div class="testi_cover">
       
       <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
        <?php foreach ($Testimonail as $key => $value): ?>
          <li data-target="#quote-carousel" data-slide-to="<?php echo $key; ?>" class="<?php if($key==0){ echo "active"; } ?>"></li>
        <?php endforeach; ?>
        </ol>
        <div class="carousel-inner testimonials">
          <!-- Quote 1 -->
          <?php foreach ($Testimonail as $key=>$Testimonail_video_array): ?>
          <div class="item <?php if($key==0){ echo "active"; } ?>">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="" src="<?php echo $this->webroot. 'image/auther_pic/'.$Testimonail_video_array['Testimonial']['auther_pic']; ?>" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p><i class="fa fa-quote-left red_color" aria-hidden="true"></i> <?php echo $Testimonail_video_array['Testimonial']['testimonial_desc']; ?> <i class="fa fa-quote-right red_color" aria-hidden="true"></i></p>
                  <small><?php echo $Testimonail_video_array['Testimonial']['Auther_name']; ?></small>
                </div>
              </div>
            </blockquote>
          </div>
        <?php endforeach; ?>
        </div>
        <!-- Carousel Slides / Quotes -->
        <!-- <div class="carousel-inner testimonials"> -->
        <!-- $ -->
          <!-- Quote 1 -->
          
          <!-- Quote 2 -->
          <!-- <?php //foreach ($Testimonail as $Testimonail_video_array): ?> -->
         <!--  <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="" src="<?php //echo $this->webroot. 'image/auther_pic/'.$Testimonail_video_array['Testimonial']['auther_pic']; ?>" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p><i class="fa fa-quote-left red_color" aria-hidden="true"></i> <?php //echo $Testimonail_video_array['Testimonial']['testimonial_desc']; ?><i class="fa fa-quote-right red_color" aria-hidden="true"></i></p>
                  <small><?php //echo $Testimonail_video_array['Testimonial']['Auther_name']; ?></small>
                </div>
              </div>
            </blockquote>
          </div> -->
          <?php //endforeach; ?>
        
        
        <!-- Carousel Buttons Next/Prev -->
     <!--   <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>-->
               </div>                          
       
        	</div>
    	</div>
	</div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var baseurl=<?php echo json_encode(FULL_BASE_URL . $this->webroot); ?>;
    $("#formoid").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();
      var myvar='';
      var $form = $( this ),
          url = $form.attr( 'action' );
          var search = $('#search').val();
          console.log($('#search').val());
          if(search.trim()==""){
            var datar="no data found";
            var myvar2 = '<div id="flashMessage" class="message">'+datar+'</div>';
                $('#msgflash').html(myvar2);
                $('#flashMessage').delay(5000).fadeOut('slow');
            return false;
          } 
$.ajax({
            dataType: "json",
            type: "POST",
            cache:false,
            url: url,
            data: ({server: $('#search').val()}),
            success: function (data){
              var lengthob=data.length;
              if(data.length>0){
                $('#showsearch').html("");
              $.each(data, function (i) {
                  var myvar='<div class="col-sm-3 col-md-3">';
          myvar+='<div class="video-wrap">';
            myvar+='<div class="video-top">';
              myvar+='<figure>';
                myvar+= '<a class="" href="'+baseurl+'home/courseSamplevideo/'+data[i].Samplevideo.id+'"><img style="width:100%;" src="'+baseurl+'image/video_images/'+data[i].Samplevideo.video_image_name+'"></a>';
              myvar+='</figure>';
            myvar+='</div>';
            myvar+='<div class="video-bottom">';
              myvar+='<h5 class="text-center">'+data[i].Samplevideo.video_name.substr(0, 14)+'</h5>';
              myvar+='<div class="btn-sec cntr_wtch">';
                myvar+='<a href="'+baseurl+'home/courseSamplevideo/'+data[i].Samplevideo.id+'" class="btn alert-danger sub_watch ">Watch Now</a>';
              myvar+='</div>';
            myvar+='</div>';
          myvar+='</div>';
        myvar+='</div>';
                    $('#showsearch').append(myvar);
                    
                });
                    var datar=" data found";
                var myvar2 = '<div id="flashMessage" class="message">'+lengthob+datar+'</div>';
                    $('#msgflash').html(myvar2);
                 } else{
                var datar="no data found";
                var myvar2 = '<div id="flashMessage" class="message">'+datar+'</div>';
                    $('#msgflash').html(myvar2);
                    $('#flashMessage').delay(5000).fadeOut('slow');
              }
            }
        });
          

    });
  });
        </script>