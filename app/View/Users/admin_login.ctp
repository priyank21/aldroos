<div class="bgadmin"><img src="<?php echo $this->webroot ?>img/bg11.jpeg" alt="" /></div>
<section class="content-header">

<div class="col-md-4 col-md-offset-4">
<div class="form11">
    <h2>User Login</h2>
    
    <?php echo $this->Session->flash('admin_login'); ?>
    	
<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" action="">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-md-12">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="data[User][username]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-md-12">          
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="data[User][password]">
            <div class="alert-warning" id= "passerror" style="display:none;"></div>
          </div>
        </div>
    
        <div class="form-group">        
          <div class="col-md-12">
            <input type="submit" class="btn btn-primary" value="Submit">
          </div>
        </div>
     </form>   
    </div>
</div>
</div>
</div>
</section>
<style>

.wrapper{
    position: fixed;
    width: 100%;
}

.main-sidebar{display:none;}
header{display:none;}
footer{display:none;}
.form11 {
    width: 100%;
    float: left;
    padding: 15px;
    box-shadow: 0 0 10px #ccc;
    background: #fff;
    border-radius: 4px;
    margin-top: 80px;
}
.skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
   /* background-color: #ecf0f5 !important;*/
}

.content-wrapper { min-height:637px !important;}
.content-wrapper, .right-side, .main-footer{
margin-left:0 !important;;
</style>  