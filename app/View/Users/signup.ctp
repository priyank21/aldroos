<!---form-line-->
<!-- <div class="form_section search_inner">
<div class="container">
	<div class="search_banner">
    	<form id="formoid" action="<?php //echo $this->webroot."home/search";?>" method="post">
        <input type="text" name="search" id="search" placeholder="What do you want to learn today?">
        <input type="submit" id="submitButton" name="submitButton" value="SEARCH COURSE">
      </form>
    	</div>
	</div>
 </div> -->


<div class="smart_container">
	
    <div class="signup_sec">
    	<div class="container">
          <div class="package">

            
              <?php foreach($subscription_data as $key => $subscription_data_plan){ ?>
              <div class="col-sm-2 padding_outer">
              <div class="package_box">
                  <table width="100%" border="0">
                      <tr>
                        <td><h3><?php  $a = $subscription_data_plan['Subscription']['subscription_plan_name'];  $out = strlen($a) > 12 ? substr($a,0,12)."..." : $a;// 7
                                echo($out);  ?></h3></td>
                      </tr>
                      <tr>
                        <td><h1><?php echo $subscription_data_plan['Subscription']['subscription_duration']; ?> Plan</h1></td>
                      </tr>
                      <tr>
                        <td><p><input type="radio" name="RadioGroup1" value="<?php  echo str_replace(' ', '', $subscription_data_plan['Subscription']['subscription_plan_name']); ?>" id="RadioGroup1_0" <?php if($key == 0){ echo 'checked="checked"';} ?>><span class="rate_sym">$</span><?php echo $subscription_data_plan['Subscription']['subscription_monthly_rate']; ?><span class="rate_per">/month</span></p></td>
                        <!--pay pal form -->
                    



                      </tr>
                      <tr>
                        <td><small>$<?php echo $subscription_data_plan['Subscription']['subscription_monthly_rate']; ?> first month<br>($<?php echo $subscription_data_plan['Subscription']['subscription_ monthly thereafter']; ?> monthly thereafter)</small></td>
                      </tr>
                      <tr>
                        <td><div class="get_star"><a class="getstarted">Get Started</a></div></td>
                      </tr>
                    </table>
                    <form action="https://www.sandbox.paypal.com/webscr" method="post" name="paypal" >
                    <input type="hidden" name="business" value="priyank.lohan-facilitator@gmail.com">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="<?php echo $subscription_data_plan['Subscription']['subscription_plan_name']; ?>">
                    <input type="hidden" name="item_number" value="<?php echo $subscription_data_plan['Subscription']['subscription_duration']; ?> ">
                    <input type="hidden" name="credits" value="510">
                    <input type="hidden" id="user_<?php echo str_replace(' ', '', $subscription_data_plan['Subscription']['subscription_plan_name']); ?>" name="custom" value="">
                  <input type="hidden" name="amount" value="<?php echo $subscription_data_plan['Subscription']['subscription_monthly_rate']; ?>">
                  <input type="hidden" name="cpp_header_image" value="http://priyank.crystalbiltech.com/droos/image/logo.png">
                  <input type="hidden" name="no_shipping" value="1">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="handling" value="0">
                  <input type="hidden" name="cancel_return" value="http://priyank.crystalbiltech.com/droos/">
                  <input type="hidden" name="return" value="http://priyank.crystalbiltech.com/droos/users/paypalresponse">
                  <input name="submit" type="submit" id="submit_<?php echo str_replace(' ', '', $subscription_data_plan['Subscription']['subscription_plan_name']); ?>" class="hidden" value="Click to continue if you are not automatically redirected." />
                  </form> 
                    </div>
            </div>
            
                  <?php } ?>
                
           
          
            
            <div class="account_info">
            	<h5>Account Information</h5>
                <p>The information submitted will be used strictly for account creation.</p>
                <div class="row">
                	<div class="col-sm-8">
                    	<div class="account_form">
                      <?php //echo $this->Session->flash('signup'); ?>
                        	<!-- <form action="<?php //echo $this->webroot ?>/users/signup" method="post"> -->
                          <div>
                                 <!--          error message-->
                            <span id="msg_block_add" class="help-block hidden">
                              <div class="alert  alert-dismissible" id="alrt_class_add" role="alert">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                                <small id="alert_msg_add"><i class="icon fa fa-check"></i> </small>
                              </div>
                            </span>
                            	<p>
                            	<label> <span>*</span>First Name</label>
                                <input class="abc" id ="first_name"  name="data[User][first_name]" type="text" required>
                               </p>
                               <p>
                            	<label> <span>*</span>Last Name</label>
                                <input class="abc" id ="last_name" name="data[User][last_name]" type="text" required>
                               </p>
                               <p>
                            	<label> <span>*</span>Your E-Mail Address</label>
                                <input class="abc" id ="email" name="data[User][email]" type="email" required>
                               </p>
                               <p>
                              <label> <span>*</span>Phone</label>
                                <input class="abc" id ="phone" name="data[User][phone]" type="text" required >
                               </p>
                               <p>
                            	<label> <span>*</span>Choose a Login Name (User ID)</label>
                                <input class="abc" id ="login_name" name="data[User][login_name]" type="text" required>
                               </p>
                               <p>
                            	<label> <span>*</span>Choose a Password</label>
                                <input class="abc" id ="passwordss" name="data[User][password]" type="password" required  min="5"> <span class="commentpass">(Minimum 5 characters) </span>
                               </p>
                               <p>
                            	<label> <span>*</span>Confirm Your Password</label>
                                <input class="abc" id ="cpassword" name="data[User][cpassword]" type="password" required min="5">
                               </p>
                                <p>
                                  <label> <span></span></label>
                                  <input type="submit" value="Submit" class="btn btn-primary" id="registr_btn">
                                 
                                </p>
                                <!-- form -->


                           </div>        
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="account_info">
              <h5>Payment Type</h5>
                
                <div class="row">
                  <div class="col-sm-8">
                      <div class="account_form2">
                          <div action="" method="get">
                              <p>
                                <label>
                                  <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_0" checked="checked">
                                  PayPal <span> Fast and secure payment through your Paypal account.</span></label>
                                <br>
                                  </p>
                                <!--   <p>
                                <label>
                                  <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_1">
                                  Credit Card Payments <span>Pay securely via Authorize.net encrypted credit card </span></label>
                                <br>
                               </p> -->
                          </div>
                          
                          <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it </p> -->
                          
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
$.ajax({
            dataType: "json",
            type: "POST",
            cache:false,
            url: url,
            data: ({server: $('#search').val()}),
            success: function (data){
              console.log(data); 
              $('#bxsliders').html("");
              $.each(data, function (i) {
                  var myvar = '<div class="what_video">';
                            
                      myvar+= '<a class="" href="'+baseurl+'home/courseSamplevideo/'+data[i].Samplevideo.id+'"><img src="'+baseurl+'image/video_images/'+data[i].Samplevideo.video_image_name+'"></a>';
                      myvar+='<h3>'+data[i].Samplevideo.video_name+'</h3>';
                      myvar+='<button class="alert-danger sub_watch">Watch Now</button>';
                      myvar+='</div>';
                    $('#bxsliders').append(myvar);
              });
            }
        });
    });
  });
</script>