<!---form-line-->
<!-- <div class="form_section search_inner">
	<div class="container">
		<div class="search_banner">
	    	<form>
				<input type="text" name="firstname" placeholder="What do you want to learn today?">
				<input name="" type="submit" value="SEARCH COURSE">
			</form>
		</div>
	</div>
</div> -->

<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Forget your password?</div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >
			<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
               <!-- this one is form div -->
                <div id="loginform" class="form-horizontal" role="form">
                <!-- forget pass link -->
                


                    <div style="margin-bottom: 25px" class="input-group">      
                        <p>If you can't remember the password associated with your account, please enter you email associated with your aldroos.com account.</p> 
                    </div>    
                    
                    <span id="msg_blocks" class="help-block hidden">
                    	<div class="alert  alert-dismissible" id="alrt_classs" role="alert">
                        	<button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                        	<small id="alert_msgs"><i class="icon fa fa-check"></i> </small>
                    	</div>
                	</span>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Enter your registered email" id="email_id">
                    </div>
                    
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <a id="forget_btn" href="#" class="btn btn-success loginbtn">Get Password  </a>
                        </div>
                    </div>
				</div> 
				    <!-- here it ends  -->
		</div>                     
    </div>  
</div>

<!-- still having issue div -->
<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Still having trouble accessing your account?</div>
        </div>     
		<div style="padding-top:30px" class="panel-body" >
			 <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form id="loginform" class="form-horizontal" role="form">
                <div style="margin-bottom: 25px" class="input-group">      
                    <p>Please use the <a href="<?php echo $this->webroot.'users/contactus';?>" style="color: #deae37;"> Contact Form </a> and a customer service representative will provide assistance.</p> 
                </div>    
            </form>     
        </div>                     
    </div>  
</div>