<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="padding-top: 20px;">    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Resetting your password?</div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >
			<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
               <!-- this one is form div -->
                <div id="loginform" class="form-horizontal" role="form">
                <!-- forget pass link -->
                


                    
                    
                    <span id="msg_blocks_reset" class="help-block hidden">
                    	<div class="alert  alert-dismissible" id="alrt_classs_reset" role="alert">
                        	<button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                        	<small id="alert_msgs_reset"><i class="icon fa fa-check"></i> </small>
                    	</div>
                	</span>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="new_password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="cofirm_new_password" type="password" class="form-control" name="password" placeholder="Confirm Password">
                    </div>                    
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <a id="rest_password_btn" class="btn btn-success loginbtn">Set Password  </a>
                        </div>
                    </div>
				</div> 
				    <!-- here it ends  -->
		</div>                     
    </div>  
</div>