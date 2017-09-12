<? //echo $profile_pic; die('hello'); ?>
<!--form-line-->
<div class="form_section search_inner">
  <div class="container">
    <!--div class="search_banner">
      <form>
        <input type="text" name="firstname" placeholder="What do you want to learn today?">
        <input name="" type="submit" value="SEARCH COURSE">
      </form>
    </div-->
  </div>
</div><!-- Form End Here -->
<div class="login">
  <div class="container">
  
	<div class="col-md-4 col-sm-4">
		<div class="left_sec">
							<div class="account_menu">
								<ul class="menu">
									<!-- <li><a id="">Account Management <i class="fa fa-user" aria-hidden="true"></i></a></li> -->
									
									<li><a id="view_profile_div">My Account <i class="fa fa-user" aria-hidden="true"></i></a></li>
									<li><a id="edit_profile_div">Edit Profile <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
									<li><a id="change_password">Change Password <i class="fa fa-key" aria-hidden="true"></i></a></li>
									<!-- <li><a id="plylist">Playlist  <i class="fa fa-history" aria-hidden="true"></i></a></li> -->
									<li><a id="subscription_details">Subscription  <i class="fa fa-history" aria-hidden="true"></i></a></li>
									<li><a href="<?php echo $this->webroot . "users/logout"; ?>">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
	</div>
	<div id="loginbox" class="mainbox col-md-8 col-sm-8">
    <div id="div_edit_profile_div" class="abc hidden">
    	
      <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Profile Picture</div>
        </div>
        <div style="padding-top:30px" class="panel-body" >
			<div class="profile-row">
				<div class="profile-pic">
					<a href="#">
						<figure>
							<?php 
								if($profile_pic != ''){ ?>
									<img src="<?php echo $this->webroot. 'image/profile_pic/'.$profile_pic; ?>" alt="Avtar" id="profile_pic_here">
								<?php }else{ ?>
									<img src="<?php echo $this->webroot. 'image/profile_pic/defult.jpg'; ?>" alt="Avtar" id="profile_pic_here">
						<?php		}
							 ?>
							
						</figure>
					</a>
				</div>
				<div class="profile-details">
					<span id="msg_blocks_profile_pic" class="help-block hidden">
                    	<div class="alert  alert-dismissible " id="alrt_classs_profile_pic" role="alert">
                        	<button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                        	<small id="alert_msgs_profile_pic"><i class="icon fa fa-check"></i> </small>
                    	</div>
                	</span>
					<div class="upload-btn">
						<label>Upload your photo</label>
						<div class="btn-sec">
							<input type="file" class="form-control">
							<span class="nw-btn">
							<label class="nw-btn">
    							Choose File<input type="file" name ="profile_pi[]" hidden id="multiFiles" accept="image/png, image/jpeg,image/jpg">
							</label>
                            </span>
						</div>
                        <div class="sze_cvr">Maximum size of 700kb. JPG, GIF, PNG</div>
					</div>
				</div>
			</div><!-- End Here -->
        </div>
      </div>
      <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Personal Details</div>
        </div>
        <div style="padding-top:30px" class="panel-body" >
			<div class="edit-details">
				<!-- <form class="profile-edit" role=""> -->
				<!-- error msg
				 -->
				 <span id="alrt_class_profile_edit" class="help-block hidden">
                    	<div class="alert  alert-dismissible" id="alrt_classs_profile_edit" role="alert">
                        	<button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                        	<small id="alrt_classss_profile_edit"><i class="icon fa fa-check"></i> </small>
                    	</div>
                	</span>
					<div class="form-group">
						<label>First Name</label>
						<?php 
								if($first_name != ''){ ?>
							<input type="text" class="form-control" name="fn" id="first_name" placeholder="Enter first name" value ='<?php echo $first_name; ?>' >
						<?php }else{ ?>
							<input type="text" class="form-control" name="fn" id="" placeholder="Enter first name">
						<?php		}
							 ?>
					</div>
					<div class="form-group">
						<label>last Name</label>
						<?php 
								if($last_name != ''){ ?>
							<input type="text" class="form-control"  id="last_name" placeholder="Enter Last name" value ='<?php echo $last_name; ?>'>
						<?php }else{ ?>
							<input type="text" class="form-control" id="last_name" placeholder="Enter last name">
						<?php		}
							 ?>
						
					</div>
					<div class="form-group">
						<label>E-mail ID</label>
						<?php 
								if($email != ''){ ?>
							<input type="email" class="form-control"  id="email"  value ='<?php echo $email; ?>'>
						<?php }else{ ?>
							<input type="email" class="form-control" id="email" placeholder="Enter last name">
						<?php		}
							 ?>
					</div>
					<div class="form-group">
						<label>Location</label>
							
								 <?php if($city != ''){ ?>
						<input type="text" id="city" class="form-control" name="fn" value="<?php echo $city; ?>" placeholder="Which city do you live?">
						<?php }else{ ?>
						<input type="text" class="form-control" id="city" placeholder="Which city do you live?">
						<?php		} ?>
							

					</div>
					<div class="form-group">
						<label>Elementary School</label>
						<?php if($elementary_school != ''){ ?>
						<input type="text" class="form-control" name="fn" id="elementary_school" placeholder="" value="<?php echo $elementary_school; ?>">
						<?php }else{ ?>
						<input type="text" class="form-control" name="fn" id="elementary_school" placeholder="">
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>High School</label>
						<?php if($high_school != ''){ ?>
						
						<input type="text" class="form-control" name="fn" id="high_school" placeholder="" value="<?php echo $high_school; ?>">
						<?php }else{ ?>
						<input type="text" class="form-control" name="fn" id="high_school" placeholder="">
						
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>College or University</label>
						
						<?php if($college_or_university != ''){ ?>
						
						<input type="text" class="form-control" name="fn" id="college_or_university" placeholder="" value="<?php echo $college_or_university; ?>">
						<?php }else{ ?>
						<input type="text" class="form-control" name="fn" id="college_or_university" placeholder="">
						
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>About me</label>

						<?php if($about_me != ''){ ?>
						<textarea class="form-control" name="fn" id="about_me" placeholder=""><?php echo $about_me; ?></textarea>
						<?php }else{ ?>
						<textarea class="form-control" name="fn" id="about_me" placeholder=""></textarea>
						<?php		} ?>
					</div>
					<div class="btn-sec">
						<input type="submit" class="btn btn-success loginbtn" value="Save Change" id="edit_profile">
					</div>
				</div>
			</div>
        
        </div><!-- End Here -->
    </div>
<!-- end edit profile div -->
	 <div id="div_view_profile_div" class="dev_view_profile_div ">
    	<div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">Profile Picture</div>
        </div>
        <div style="padding-top:15px" class="panel-body">
			<div class="profile-row1">
				<div class="profile-pic1">
					<a href="#">
						<figure1>
							<?php 
								if($profile_pic != ''){ ?>
									<img src="<?php echo $this->webroot. 'image/profile_pic/'.$profile_pic; ?>" alt="Avtar" id="profile_pic_here">
								<?php }else{ ?>
									<img src="<?php echo $this->webroot. 'image/profile_pic/defult.jpg'; ?>" alt="Avtar" id="profile_pic_here">
						<?php		}
							 ?>
						</figure>
					</a>

				</div>
				<!--div class="profile-details">
					<div class="upload-btn">
						<label>Upload your photo</label>
						<div class="btn-sec">
							<input type="file" class="form-control">
							<span class="nw-btn">Choose FIle</span>
						</div>
					</div>
				</div-->
			</div><!-- End Here -->
        </div>
      </div>
 
 
 
 
 <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Personal Details</div>
        </div>
        <div style="padding-top:30px" class="panel-body" >
			<div class="edit-details">
				<form class="profile-edit" role="">
					<div class="form-group">
						<label>First Name :</label>
						 <?php if($first_name != ''){ ?>
						 <div class="lst_set"><?php echo $first_name; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
						
					</div>
					<div class="form-group">
						<label>last Name :</label>
						<?php if($last_name != ''){ ?>
						 <div class="lst_set"><?php echo $last_name; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>E-mail ID :</label>
						<?php if($email != ''){ ?>
						 <div class="lst_set"><?php echo $email; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>Location :</label>
						<?php if($city != ''){ ?>
						 <div class="lst_set"><?php echo $city; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>Elementary School :</label>
						<?php if($elementary_school != ''){ ?>
						 <div class="lst_set"><?php echo $elementary_school; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>High School :</label>
						<?php if($high_school != ''){ ?>
						 <div class="lst_set"><?php echo $high_school; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>College or University :</label>
						<?php if($college_or_university != ''){ ?>
						 <div class="lst_set"><?php echo $college_or_university; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
					</div>
					<div class="form-group">
						<label>About me :</label>
						<?php if($about_me != ''){ ?>
						 <div class="lst_set"><?php echo $about_me; ?></div>
						<?php }else{ ?>
						<div class="lst_set">--</div>
						<?php		} ?>
					</div>
					
				</div>
			</div>
        </div>
    </div>

   
    <div id="div_change_password" class="dev_view_profile_div hidden">
    	<div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Change Password</div>
        </div>
        <div style="padding-top:30px" class="panel-body" >
			<div class="edit-details">
				<span id="msg_blocks_chng_pass" class="help-block hidden">
                    	<div class="alert  alert-dismissible" id="alrt_classs_chng_pass" role="alert">
                        	<button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                        	<small id="alert_msgs_chng_pass"><i class="icon fa fa-check"></i> </small>
                    	</div>
                	</span>
				<div >
					<div class="form-group">
						<label>Old Password</label>
						<input type="Password" class="form-control" name="fn" id="old_pass" placeholder="Enter old password">
					</div>
					<div class="form-group">
						<label>New Password</label>
						<input type="Password" class="form-control" name="fn" id="new_pass" placeholder="Enter new password">
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="Password" class="form-control" name="fn" id="cpass" placeholder="Confirm new password">
					</div>
					
					<div class="btn-sec">
						<input type="submit" id ="chng_pass" class="btn btn-success loginbtn" value="Change Password">
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
	<div id="div_subscription_details" class="dev_view_profile_div hidden">
    	<div class="panel panel-info" >
        	<div class="panel-heading">
          		<div class="panel-title">Subscription details</div>
        	</div>
        	<div style="padding-top:30px" class="panel-body">
        	<?php if($user_data['User']['subscription_plan_name'] != ''){ ?>

        		<table>
        			<thead id="subs"><tr><th>Subscription plan name</th> <th>Subscription rate</th><th>Subscription status</th><th>Subscription start date</th><th>Subscription end date</th><th>Subscription payment status</th></tr></thead>
        			<tbody><tr>
        			<td>
        				<?php echo $user_data['User']['subscription_plan_name']; ?>
        			</td>
        			<td>
        				<?php echo $user_data['User']['subscription_rate']; ?>
        			</td>
        			<td>
        				<?php  
        				if($user_data['User']['subscription_status']==1){
        						echo "Active";
        					}else{
        						echo "Inactive";
        						} ?>
        			</td>
        			<td>
        				<?php echo $user_data['User']['subscription_start_date']; ?>
        			</td>
        			<td>
        				<?php echo $user_data['User']['subscription_end_date']; ?>
        			</td>
        			<td>
        				<?php  
        				if($user_data['User']['subscription_paymant_status']==1){
        						echo "Active";
        					}else{
        						echo "Inactive";
        						} ?>
        			</td>
        			</tr></tbody>
        		</table>
        	<?php		}else{ ?>
        	<p>You did not have any subscription yet if you wants to purchase a subscription <a href="<?php echo $this->webroot . 'users/subscriptionpage'; ?>">click here</a></p>
        	<?php		} ?>
        	</div>
        </div>
    </div>
 	<div id="div_plylist" class="dev_view_profile_div hidden">
    	<div class="panel panel-info" >
        	<div class="panel-heading">
          		<div class="panel-title">Playlist</div>
        	</div>
        </div>		
    </div>
    </div><!-- End Here -->
  </div>
<style type="text/css">
#subs th{
	padding-right: 10px;
}
</style>