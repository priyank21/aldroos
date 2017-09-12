<?php //pr($Chapter);die(); ?>
<div class="form_section search_inner">
<div class="container">
    <!--div class="search_banner">
        <form>
<input type="text" name="firstname" placeholder="What do you want to learn today?">
<input name="" type="submit" value="SEARCH COURSE">
</form>

        </div-->
    </div>
 </div>


<div class="smart_container">
    <div class="live_tutorial">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left_collapse">
                        <h5><?php echo $Chapter['Chapter']['chapter_name']; ?></h5>
                        <div class="acc_inner">
                        <ul class="list_left">
                           <!-- <li><a href="#">Intro <span>0:00</span></a></li> -->
                            <!-- <div id="accordion">
                                <div class="panel panel-default-small">
                                    <div class="panel-heading">
                                        <div class="panel-title"> <i class="indicator fa fa-chevron-right" style="font-size:12px;"></i><a data-toggle="collapse" href="#menuPanelListGroup" >  Overview <span>0:00</span> </a> </div>
                                    </div>
                                    <ul class="list-group collapse out" id="menuPanelListGroup">
                                        <li class="list-group-item librePanelListGroupItem"> <a href="#"> <span>Access To Yodlee APIs </span></a>
                                        <li class="list-group-item librePanelListGroupItem"> <span><a href="#">Using Sandbox</a></span> </li>
                                    </ul>
                                </div>
                           </div> -->
                           <?php foreach ($Chapter['Topic'] as $key => $value):?>
                            <li><a href="#" onclick="restart('<?php echo $value['topic_timing'] ?>')"><?php echo $value['topic_name']; ?> <span><?php echo $value['topic_timing']; ?></span></a></li>
                            <?php endforeach; ?>
                        </ul>    
                
               
 </div>

  
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="video_main">

                           <?php $file = $Chapter['Chapter']['video_name']; 
                                $get_extension = $id = substr($file, strrpos($file, '.') + 1);
                            ?>
                        <video width="580" height="340"  controls controlsList="nodownload" id="Video1" >
                            <source src="<?php echo $this->webroot.'videos/chapter_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
                        </video>

                    </div>
                </div>
                <!-- <div class="col-sm-3">
                    <div class="right_video">
                    <img src="<?php echo $this->webroot  ?>image/img1.jpg">
                        <h5>Professor Murray</h5>
                        <p>Lecture Example 1</p>
                        <p>Slide duration: 4:12 min.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    
    <div class="video_pre">
        <div class="container">
            <div class="row">
                <!-- <div class="col-sm-6">
                    <div class="prev"><a href="#"><img src="<?php echo $this->webroot  ?>image/arrow_left.png">Previous Lecture: <span></span></a></div>
                </div>
                <div class="col-sm-6">
                    <div class="next_btn"><a href="#"><img src="<?php echo $this->webroot  ?>image/arrow_right.png">Next Lecture: <span> </span></a></div>
                </div> -->
                <div class="col-sm-12">
                    <div class="lacture_txt">
                        <h2><?php echo $Chapter['Chapter']['course_name'] .' '.':'.' '.$Chapter['Chapter']['chapter_name']; ?></h2>
                        <!-- <h3>II. Past Tense part 2: Lecture 1 | 23:20 min</h3> -->

                    </div>
                </div>
            </div>
            
            <div class="video_desc">
                <div data-example-id="togglable-tabs">
  <ul class="nav nav-tabs" id="myTabs" role="tablist">
    <!-- <li role="presentation" class=""><a href="#discussion" id="discussion-tab" role="tab" data-toggle="tab" aria-controls="discussion" aria-expanded="true">Discussion</a></li> -->
    <li role="presentation" class="active"><a href="#study" role="tab" id="study-tab" data-toggle="tab" aria-controls="study" aria-expanded="false">Table of Contents</a></li>
    <li role="presentation" class=""><a href="#tablecon" role="tab" id="tablecon-tab" data-toggle="tab" aria-controls="tablecon" aria-expanded="false"> Lecture Description</a></li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade" role="tabpanel" id="discussion" aria-labelledby="discussion-tab">
      <p >cardigan american apparel, butcher voluptate nisi qui.</p>
    </div>
    <div class="tab-pane fade active in" role="tabpanel" id="study" aria-labelledby="study-tab">
      <div class="des_list">
        <h3><?php echo $Chapter['Chapter']['chapter_name']; ?></h3>
        <ul>
        <?php foreach ($Chapter['Topic'] as $key => $value):?>
                <li><a href="#" onclick="restart('<?php echo $value['topic_timing'] ?>')"><?php echo $value['topic_name']; ?> <span><?php echo $value['topic_timing']; ?></span></a></li>
        <?php endforeach; ?><!-- 
            <li>* Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>* Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>* Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>* Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>* Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>* Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>* Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li> -->
        </ul>
      </div> 
    </div>
    <div class="tab-pane fade" role="tabpanel" id="tablecon" aria-labelledby="tablecon-tab">
      <p><?php echo $Chapter['Chapter']['chapter_discription']; ?></p>
    </div>
  </div>
</div>
            </div>
            
        </div>
    </div>
    
</div>

