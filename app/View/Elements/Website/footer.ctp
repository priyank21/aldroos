
<!---footer-section-->
<div class="top_footer">
  <div class="container">
      <div class="row">
        <div class="top_cvr">
          <div class="col-sm-2">
              <div class="pro_pic">
                  <h3><img width="50px" src="<?php echo $this->webroot. 'image/logo.png'; ?>" /></h3>
                  </div>
              </div>
                <div class="col-sm-10">
                  <div class="fotr_txt">
                      <!--<div class="col-xs-6 col-sm-3">
                          <div class="tutorial">
                            <h4>TUTORIAL</h4>
                      <ul>
                        <li><a href="#">Biology</a></li>
                        <li><a href="#">Chemistry</a></li>
                        <li><a href="#">Geology</a></li>
                        <li><a href="#">Physics</a></li>
                        </ul>
                          </div>
                      </div>-->
                        
                        <div class="col-xs-6 col-sm-4">
                          <div class="tutorial">
                            <h4>SERVICES</h4>
                      <ul>
                        <li><a href="<?php echo $this->webroot . "home/aboutus"; ?>">About</a></li>
                        <li><a href="<?php echo $this->webroot . "faqs/index"; ?>">FAQ</a></li>
                      <!--   <li><a href="#">study Guide</a></li> -->
                        <li><a href="<?php echo $this->webroot . 'users/contactus' ?>">Contact Us</a></li>
                        <!-- <li><a href="#">System Requirements</a></li> -->
                        </ul>
                          </div>
                      </div>
                        
                        <div class="col-xs-6 col-sm-4">
                          <div class="tutorial">
                            <h4>CONTACT INFORMATION</h4>
                      <ul>
                        <li><a href="#"><h3>Address:</h3><div class="contact_right">121 King Street,Victoria</div></a></li>
                        <li class="gp_tp"><a href="#"><h3>Email:</h3><div class="contact_right">bc@gmail.com</div></a></li>
                    <!--    <li><a href="#">Geology</a></li>
                        <li><a href="#">Physics</a></li>-->
                        </ul>
                        <!--<ul>
                           <li><h3>Address:</h3><div class="contact_right">121 King Street,Victoria</div></li>
                           <li><h3>Email:</h3><div class="contact_right">abc@gmail.com</div></li>
                         
                          </ul>-->
                          </div>
                         <!--<div class="social_icon">
                            <h4>Follow Us <i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-twitter" aria-hidden="true"></i></h4>
                          </div>-->
                          
                      </div>
                            <div class="col-xs-6 col-sm-4">
                          <div class="tutorial">
                            <h4>Follow Us</h4>
                      <!--<ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>-->
                        <div class="social_icon">
                           <h4>
                          
                           <a href="<?php echo $fb_link['Link']['link'] ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> 
                            </a>
                            <a href="<?php echo $twiter_link['Link']['link'];  ?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i> 
                            </a>
                            <a href="<?php echo $Google_link['Link']['link'];  ?>">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo $pintrest_link['Link']['link'];  ?>">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                            <a>
                            </h4>
                          </div>
                      </div>
                      </div>
                      
                  </div>
                 </div>
          </div>
      </div>
  </div>
</div>

<!---lower-footer-->
<div class="lowr_ftr">
	<div class="container">
    	<div class="lwr_text">
        	<h3>Copyright 2017 @ Al Droos.com - All Right Reserved.</h3>
        	</div>
    	</div>
	</div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->webroot . 'js/website/bootstrap.min.js' ?>"></script>
	<script src="<?php echo $this->webroot . 'js/website/jquery.bxslider.min.js' ?>"></script>

    <script src="<?php echo $this->webroot . 'js/website/slick.js' ?>" type="text/javascript" charset="utf-8"></script>
    <!---test-slider-->
<script type="text/javascript">
//    $(document).ready(function() {
//         // alert($.cookie('time_for_video')+"hello");

//   //Set the carousel options
//   $('#quote-carousel').carousel({
//     pause: true,
//     interval: 4000,
//   });
// if(!!window.performance && window.performance.navigation.type == 2)
// {
//     window.location.reload();
// }

//   document.onkeypress = function (event) {
//         event = (event || window.event);
//         if (event.keyCode === 123) {
//           return false;
//         }
//       }
//       document.onmousedown = function (event) {
//         event = (event || window.event);
//         if (event.keyCode === 123) {
//           return false;
//         }
//       }
//       document.onkeydown = function (event) {
//         event = (event || window.event);
//         if (event.keyCode === 123) {
//           return false;
//         }
//       }
//   $.ctrl = function(key, callback, args) {
//     var isCtrl = false;
//     $(document).keydown(function(e) {
//         if(!args) args=[]; // IE barks when args is null
        
//         if(e.ctrlKey) isCtrl = true;
//         if(e.keyCode == key.charCodeAt(0) && isCtrl) {
//             callback.apply(this, args);
//             return false;
//         }
//     }).keyup(function(e) {
//         if(e.ctrlKey) isCtrl = false;
//     });        
// };
// $.ctrl('U', function() {
//     return false;
// });
 


// });

 //log out
function restart(value) {
    //alert(value);
        var hms = value;  
        var a = hms.split(':'); 
         var seconds = (+a[0]) * 60 * 60  + (+a[1])*60 + (+a[2]); 
        console.log(seconds);
        var video = document.getElementById("Video1");
        video.currentTime = seconds;
        video.play();
    }

function hello(argument) {
    $.cookie('time_for_video', argument,{ path:'/'});
}

$(window).bind("load", function() { 
    var time_for_video = $.cookie('time_for_video');
     if(typeof time_for_video !== 'undefined'){
        var hms = time_for_video;  
        var a = hms.split(':'); 
         var seconds = (+a[0]) * 60 * 60  + (+a[1])*60 + (+a[2]); 
        console.log(seconds);
        var video = document.getElementById("Video1");
        video.currentTime = seconds;
        video.play();
        $.removeCookie('time_for_video', { path: '/' });
     }
});



//signup
//registetr_user_ajax
    $('#registr_btn').click(function () {
        $('#msg_block_add').addClass('hidden');
        //alert('vjncvbn');
        var url = '<?php echo $this->webroot; ?>users/signup';
        var redirect_url = '<?php echo $this->webroot; ?>';
        var firstname = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var phone_number = $('#phone').val();
        var login_name = $('#login_name').val();
        var passwords = $('#passwordss').val();
        var confirm_pass = $('#cpassword').val();
         // alert(selected_plan);
        // return false;
        var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        if (firstname == '') {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('First name cannot be empty !!');
            $('#msg_block_add').removeClass('hidden');
            return false;
        } else if (last_name == '') {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Last name cannot be empty !!');
            $('#msg_block_add').removeClass('hidden');
            return false;
        } else if (email == '') {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Email cannot be empty !!');
            $('#msg_block_add').removeClass('hidden');
            return false;
        } else if (phone_number == '') {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Phone number cannot be empty !!');
            $('#msg_block_add').removeClass('hidden');
            return false;
        } else if (passwords == '') {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Password cannot be empty !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        } else if (!email_regex.test(email)) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Please provide a valid email id !!');
            $('#msg_block_add').removeClass('hidden');
            return false;
        } else if (confirm_pass == '') {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Confirm Password cannot be empty !!');
            $('#msg_block_add').removeClass('hidden');
            return false;
        } else if (confirm_pass != passwords) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Password does not matched !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        }else if (firstname.match(".*\\d.*")) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('First name should not have any numeric value !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        }else if (last_name.match(".*\\d.*")) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Last name should not have any numeric value !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        }else if (login_name.match(".*\\d.*")) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Login name should not have any numeric value !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        }else if (!phone_number.match(".*\\d.*")) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Phone number should be numeric !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        }else if (confirm_pass.length < 5) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Password is having less character than 5 !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        }else if (phone_number.length > 10) {
            $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_add').html('Phone number should not have more than 15 digits !!');
            $('#msg_block_add').removeClass('hidden');
            return false;

        }
        //return false;
        // alert(phone_number_code);
        $.ajax({
            url: url,
            type: "POST",
            //dataType: "json",
            data: {
                'firstname': firstname,
                'last_name': last_name,
                'email': email,
                'phone': phone_number,
                'login_name': login_name,
                'confirm_pass': confirm_pass
            },
            success: function (data) {
               //alert(data);
                $('#msg_block_add').addClass('hidden');
                if (data == 0) {
                    $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_class_add').html('Email already exists !!');
                    $('#msg_block_add').removeClass('hidden');
                }
                else if (data == 1) {
                    $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_class_add').html('Phone number already exists !!');
                    $('#msg_block_add').removeClass('hidden');
                } else if (data == 2) {
                    $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_class_add').html('Login name already exists !!');
                    $('#msg_block_add').removeClass('hidden');
                } else if (data.indexOf('success') >= 0) {
                    //alert(parseInt(data));
                   //window.location.replace(redirect_url);
                    //var delay = 3000; 

                    var selected_plan = $("input[name='RadioGroup1']:checked").val();
                    //alert(selected_plan + 'plan value');
                    $('#user_'+selected_plan).val(parseInt(data));
                    $('#alrt_class_add').removeClass('alert-danger').addClass('alert-success');
                    $('#alrt_class_add').html('Your account has been created successfully, please wait we are redirecting you to paymant page!!');
                    $('#msg_block_add').removeClass('hidden');
                    //$('#btn_'+selected_plan).trigger('click');
                    // $('#btn_'+selected_plan).submit();
                     $('#submit_'+selected_plan).trigger('click');
                    //setTimeout(function(){ window.location = redirect_url; }, delay);
                } else if (data == 4) {
                   $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_class_add').html('Something went wrong please try again later !!');
                    $('#msg_block_add').removeClass('hidden');
                }else{
                    $('#alrt_class_add').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_class_add').html('Something went wrong please try again later !!');
                    $('#msg_block_add').removeClass('hidden');
                }
            }
        });


    });



    //login module
    $("#loginuser").click(function () {
        $('#msg_block').addClass('hidden');
        var username = $('#username').val();
        var password = $('#password').val();
        var url = '<?php echo $this->webroot ?>users/loginuser';
        if (username == '' || password == '') {
            $('#alrt_class').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class').html('Please fill both the Fields !!');
            $('#msg_block').removeClass('hidden');
            return false;
        }
        $.ajax({
            url: url,
            type: "POST",
            //dataType: "json",
            data: {
                'username': username,
                'password': password,
            },
            success: function (data) {
                // alert(data);
                // return false;
                if (data == 1) {
                    window.location = '<?php echo $this->webroot; ?>';
                } else if (data == 0) {
                    //admin login
                    window.location = '<?php echo $this->webroot; ?>admin/dashboards/index';
                } else if (data == 3) {
                    $('#alrt_class').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_class').html('Login details are incorrect !!');
                    $('#msg_block').removeClass('hidden');
                }
            }


        });

    });
//forget password
$("#forget_btn").click(function () {
        $('#msg_blocks').addClass('hidden');
        var username = $('#login-username').val();
        var url = '<?php echo $this->webroot ?>users/forgetpwd';
        if (username == '') {
            $('#alrt_classs').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs').html('Please fill both the Fields !!');
            $('#msg_blocks').removeClass('hidden');
            return false;
        }
        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data: {
                'username': username,
            },
            success: function (data) {
               // alert(data);
                if (data == 1) {
                    $('#alrt_classs').removeClass('alert-success').addClass('alert-danger');
                    $('#alert_msgs').html('This Email does not exists in our record !!');
                    $('#msg_blocks').removeClass('hidden');
                } else if (data == 0) {
                   $('#alrt_classs').removeClass('alert-success').addClass('alert-danger');
                    $('#alert_msgs').html('There is no user with this email id !!');
                    $('#msg_blocks').removeClass('hidden');
                    
                } else if (data == 2) {
                    $('#login-username').val('');
                    $('#alrt_classs').removeClass('alert-danger').addClass(' alert-success');
                    $('#alert_msgs').html('Reset Password Link is sent to you email id !!');
                    $('#msg_blocks').removeClass('hidden');
                }else if (data == 4) {
                    $('#alrt_classs').removeClass('alert-success').addClass('alert-danger');
                    $('#alert_msgs').html('This user is not activated now please contact website admin !!');
                    $('#msg_blocks').removeClass('hidden');
                }else if (data == 3) {
                    $('#alrt_classs').removeClass('alert-success').addClass('alert-danger');
                    $('#alert_msgs').html('There is some error in generating reset link please try again after some time !!');
                    $('#msg_blocks').removeClass('hidden');
                }
            }


        });

    });

//reset password
$("#rest_password_btn").click(function () {
        $('#msg_blocks_reset').addClass('hidden');
        var new_pass = $('#new_password').val();
        var confirm_new_pass = $('#cofirm_new_password').val();
        var url = '<?php echo $this->webroot ?>users/reset';
        var url_current = window.location.href;
        var hash  = url_current.split("reset/").pop();
        if (new_pass == '' || confirm_new_pass == '') {
            $('#alrt_classs_reset').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs_reset').html('Please fill both the Fields !!');
            $('#msg_blocks_reset').removeClass('hidden');
            return false;
        }else if (new_pass != confirm_new_pass) {
            $('#alrt_classs_reset').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs_reset').html('Password mismatch !!');
            $('#msg_blocks_reset').removeClass('hidden');
            return false;
        }else if(hash == ''){
            $('#alrt_classs_reset').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs_reset').html('This request is not valid !!');
            $('#msg_blocks_reset').removeClass('hidden');
            return false;
        }
        
        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data: {
                'confirm_new_pass': confirm_new_pass,
                'hash_data': hash,
            },
            success: function (data) {
               // alert(data);
                if (data == 0) {
                    $('#alrt_classs_reset').removeClass('alert-success').addClass('alert-danger');
                    $('#alert_msgs_reset').html('Token Corrupted. Please create new token by sending email request again !!');
                    $('#msg_blocks_reset').removeClass('hidden');
                } else if (data == 1) {
                    $('#new_password').val('');;
                    $('#cofirm_new_password').val('');;
                    $('#alrt_classs_reset').removeClass('alert-danger').addClass('alert-success');
                    $('#alert_msgs_reset').html('Password reset successfully !!');
                    $('#msg_blocks_reset').removeClass('hidden');
                    
                } else if (data == 2) {
                    $('#alrt_classs_reset').removeClass('alert-danger').addClass(' alert-success');
                    $('#alert_msgs_reset').html('There is some error please try again later !!');
                    $('#msg_blocks_reset').removeClass('hidden');
                }
            }


        });

    });
// updating profile pic
// $("#new_file").change(function(e){
//     console.log(event);
// });
$("#multiFiles").change(function(e){
    //alert('hello');

    $('#msg_blocks_profile_pic').addClass('hidden');
    var loader_image = "<?php echo $this->webroot ?>image/profile_pic/ajax-loader.gif";
    var defult_image = "<?php echo $this->webroot ?>image/profile_pic/defult.jpg";
    $('#profile_pic_here').attr('src', loader_image);
    var url = '<?php echo $this->webroot ?>users/profilepic';
    var form_data = new FormData();
    var ins = document.getElementById('multiFiles').files.length;
        for (var x = 0; x < ins; x++) {
            form_data.append("files[]", document.getElementById('multiFiles').files[x]);
        }
        
    //return false;    
    $.ajax({
        url: url, 
        dataType: 'text', 
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
    success: function (response) {
         //console.log(response);
         if(typeof response === 'string' || response instanceof String){
            $('#alrt_classs_profile_pic').removeClass('alert-danger').addClass('alert-success');
            $('#alert_msgs_profile_pic').html('Your profile pic has been updated successfully !!');
            $('#msg_blocks_profile_pic').removeClass('hidden');
            var new_image = "<?php echo $this->webroot ?>image/profile_pic/"+response;
            $('#profile_pic_here').attr('src', new_image);
         }else if(data = 1){
            $('#alrt_classs_profile_pic').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs_profile_pic').html('There is some internal error please try again !!');
            $('#msg_blocks_profile_pic').removeClass('hidden');
         }else if(data = 2){
            $('#alrt_classs_profile_pic').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs_profile_pic').html('There is some error in your file please try again !!');
            $('#msg_blocks_profile_pic').removeClass('hidden');
         }
    },
    });
});
//edit profile
$("#edit_profile").click(function () {
        $('#alert_class_profile_edit').addClass('hidden');
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var city = $('#city').val();
        var elementary_school = $('#elementary_school').val();
        var high_school = $('#high_school').val();
        var college_or_university = $('#college_or_university').val();
        var about_me = $('#about_me').val();
        var url = '<?php echo $this->webroot ?>users/editprofile';
        if (first_name == '') {
            $('#alrt_classs_profile_edit').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_classss_profile_edit').html('Please fill First name !!');
            $('#alert_class_profile_edit').removeClass('hidden');
            return false;
        }else if(last_name == ''){
            $('#alrt_classs_profile_edit').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_classss_profile_edit').html('Please fill Last name !!');
            $('#alrt_class_profile_edit').removeClass('hidden');
            return false;
         }else if(email == ''){
            $('#alrt_classs_profile_edit').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_classss_profile_edit').html('Please fill email id !!');
            $('#alrt_class_profile_edit').removeClass('hidden');
            return false;
         }
        $.ajax({
            url: url,
            type: "POST",
            //dataType: "json",
            data: {
                'first_name': first_name,
                'last_name': last_name,
                'email': email,
                'city': city,
                'elementary_school': elementary_school,
                'high_school': high_school,
                'college_or_university': college_or_university,
                'about_me': about_me,
            },
            success: function (data) {
                //alert(data);
                if (data == 0) {
                    $('#alrt_classs_profile_edit').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_classss_profile_edit').html('This id already exists in our record please enter another id !!');
                    $('#alrt_class_profile_edit').removeClass('hidden');
                } else if (data == 1) {
                    $('#alrt_classs_profile_edit').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_classss_profile_edit').html('There is some error in your request please try again !!');
                    $('#alrt_class_profile_edit').removeClass('hidden');
                } else if (data == 2) {
                    $('#alrt_classs_profile_edit').removeClass('alert-danger').addClass('alert-success');
                    $('#alrt_classss_profile_edit').html('Your Profile is updated successfully !!');
                    $('#alrt_class_profile_edit').removeClass('hidden');
                }
            }


        });

    });

//change div on my account page
$(document).ready(function() {   
    $("ul.menu li a").on("click", function(e) { 
        e.PreventDefault; 
        var grabID = $(this).attr( "id" );
        
        if('div_'+grabID == 'div_edit_profile_div'){
            $('#'+'div_'+grabID).removeClass('hidden');
            $('#div_view_profile_div').addClass('hidden');
            $('#div_change_password').addClass('hidden');
            $('#div_subscription_details').addClass('hidden');
            $('#div_plylist').addClass('hidden');
        }else if('div_'+grabID == 'div_view_profile_div'){
            $('#'+'div_'+grabID).removeClass('hidden');
            $('#div_edit_profile_div').addClass('hidden');
            $('#div_change_password').addClass('hidden');
            $('#div_subscription_details').addClass('hidden');
            $('#div_plylist').addClass('hidden');
        }else if('div_'+grabID == 'div_change_password'){
            $('#'+'div_'+grabID).removeClass('hidden');
            $('#div_edit_profile_div').addClass('hidden');
            $('#div_view_profile_div').addClass('hidden');
            $('#div_subscription_details').addClass('hidden');
            $('#div_plylist').addClass('hidden');
        }else if('div_'+grabID == 'div_subscription_details'){
            $('#'+'div_'+grabID).removeClass('hidden');
            $('#div_edit_profile_div').addClass('hidden');
            $('#div_change_password').addClass('hidden');
            $('#div_view_profile_div').addClass('hidden');
            $('#div_plylist').addClass('hidden');
        }else if('div_'+grabID == 'div_plylist'){
            $('#'+'div_'+grabID).removeClass('hidden');
            $('#div_edit_profile_div').addClass('hidden');
            $('#div_change_password').addClass('hidden');
            $('#div_subscription_details').addClass('hidden');
            $('#div_view_profile_div').addClass('hidden');
        }
        
        

    });

});
//change password
$("#chng_pass").click(function (event) {
        event.preventDefault();
        $('#msg_blocks_chng_pass').addClass('hidden');
        var old_pass = $('#old_pass').val();
        var new_pass = $('#new_pass').val();
        var confirm_new_pass = $('#cpass').val();
        var url = '<?php echo $this->webroot ?>users/chngpass';
        if (old_pass == '' || new_pass == '' || confirm_new_pass == '') {
            $('#alrt_classs_chng_pass').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs_chng_pass').html('Please fill all the Fields !!');
            $('#msg_blocks_chng_pass').removeClass('hidden');
            return false;
        }else if (new_pass != confirm_new_pass) {
            $('#alrt_classs_chng_pass').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs_chng_pass').html('New Passwords does not match !!');
            $('#msg_blocks_chng_pass').removeClass('hidden');
            return false;
        }        
        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data: {
                'confirm_new_pass': confirm_new_pass,
                'old_pass': old_pass,
            },
            success: function (data) {
                //alert(data);
                if (data == 0) {
                    $('#alrt_classs_chng_pass').removeClass('alert-success').addClass('alert-danger');
                    $('#alert_msgs_chng_pass').html('Old Password does not exists in our record !!');
                    $('#msg_blocks_chng_pass').removeClass('hidden');
                } else if (data == 1) {
                    $('#old_pass').val('');;
                    $('#new_pass').val('');;
                    $('#cpass').val('');;
                    $('#alrt_classs_chng_pass').removeClass('alert-danger').addClass('alert-success');
                    $('#alert_msgs_chng_pass').html('Password change successfully !!');
                    $('#msg_blocks_chng_pass').removeClass('hidden');
                } else if (data == 2) {
                    $('#alrt_classs_chng_pass').removeClass('alert-danger').addClass('alert-success');
                    $('#alert_msgs_chng_pass').html('There is some error please try again !!');
                    $('#msg_blocks_chng_pass').removeClass('hidden');
                }
            }


        });

    });

    $("#login").click(function () {
        
         $('#msg_blocks').addClass('hidden');
         var username = $('#user').val();
         var password = $('#pass').val();
        //alert(username);
        var url = '<?php echo $this->webroot ?>users/loginuser';
        if (username == '' || password == '') {
            $('#alrt_classs').removeClass('alert-success').addClass('alert-danger');
            $('#alert_msgs').html('Please fill both the Fields !!');
            $('#msg_blocks').removeClass('hidden');
            return false;
        }
        $.ajax({
            url: url,
            type: "POST",
            //dataType: "json",
            data: {
                'username': username,
                'password': password,
            },
            success: function (data) {
                // alert(data);
                // return false;
                if (data == 1) {
                    window.location = '<?php echo $this->webroot; ?>';
                } else if (data == 0) {
                    //admin login
                    window.location = '<?php echo $this->webroot; ?>admin/dashboards/index';
                } else if (data == 3) {
                    $('#alrt_classs').removeClass('alert-success').addClass('alert-danger');
                    $('#alert_msgs').html('Login details are incorrect !!');
                    $('#msg_blocks').removeClass('hidden');
                }
            }


        });

    });
//reset page
$('#reset').click(function(event){
    var firstname = $('#f_name').val('');
        var last_name = $('#l_name').val('');
        var email = $('#email_id').val('');
        var message = $('#message').val('');
        //$('#aff3').attr('checked', 'checked');
})

//contactus page
$('#submit_cnt').click(function (event) {
        event.preventDefault();
        $('#msg_block_cnt').addClass('hidden');
        //alert('vjncvbn');
        var url = '<?php echo $this->webroot; ?>users/contactus';
        var firstname = $('#f_name').val();
        var last_name = $('#l_name').val();
        var email = $('#email_id').val();
        var Affiliation = $('input[name=affiliation]:checked').val();
        var message = $('#message').val();
        
        var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        if (firstname == '') {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('First name cannot be empty !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;
        } else if (last_name == '') {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('Last name cannot be empty !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;
        } else if (email == '') {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('Email cannot be empty !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;
        } else if (Affiliation == '') {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('Affiliation cannot be null !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;
        }  else if (!email_regex.test(email)) {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('Please provide a valid email id !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;
        } else if (message == '') {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('Message cannot be empty !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;
        } else if (firstname.match(".*\\d.*")) {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('First name should not have any numeric value !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;

        }else if (last_name.match(".*\\d.*")) {
            $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
            $('#alrt_class_cnt').html('Last name should not have any numeric value !!');
            $('#msg_block_cnt').removeClass('hidden');
            return false;

        }
        //return false;
        // alert(phone_number_code);
        $.ajax({
            url: url,
            type: "POST", 
            dataType: "json",
            data: {
                'firstname': firstname,
                'last_name': last_name,
                'email': email,
                'Affiliation': Affiliation,
                'message': message,
            },
            success: function (data) {
               console.log(data);
               //return false;
                $('#msg_block_cnt').addClass('hidden');
                if (data == 1) {
                    $('#alrt_class_cnt').removeClass('alert-danger').addClass('alert-success');
                    $('#alrt_class_cnt').html('Your query is successfully submitted. We will contact you.');
                    $('#msg_block_cnt').removeClass('hidden');
                }
                else if (data == 2) {
                    $('#alrt_class_cnt').removeClass('alert-success').addClass('alert-danger');
                    $('#alrt_class_cnt').html('There is some error occurred in your request you can submit it after some time !!');
                    $('#msg_block_cnt').removeClass('hidden');
                } 
            }
        });


    });



// my function
// setTimeout(function() { 
//     alert($('#hey').val());
//     $('#submit').trigger('click');

// }, 3000);
///video timing playing according to that

  </script>

<script>
$('.bxslider').bxSlider({
  minSlides: 3,
  maxSlides: 4,
  slideWidth: 263,
  slideMargin: 30
});
</script>
 <script>

$('.padding_outer').click(function() {
      $(".padding_outer .package_box.select").removeClass("select");
      $(this).find('.package_box').addClass('select');
});

</script>

  <!--<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
  </script>-->
  </body>
</html>