
<div class="smart_container">
  <?php echo $this->Session->flash('sub_cription'); ?>
    <div class="signup_sec">
      <div class="container">
      <?php if(($get_current_user_data['User']['subscription_status'] != 1) || ($get_current_user_data['User']['login_count_in subscription_period'] >= 100)){ ?>
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
                        <td><div class="get_star">
                         <form action="https://www.sandbox.paypal.com/webscr" method="post" name="paypal" >
                    <input type="hidden" name="business" value="priyank.lohan-facilitator@gmail.com">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="<?php echo $subscription_data_plan['Subscription']['subscription_plan_name']; ?>">
                    <input type="hidden" name="item_number" value="<?php echo $subscription_data_plan['Subscription']['subscription_duration']; ?> ">
                    <input type="hidden" name="credits" value="510">
                    <input type="hidden"  name="custom" value="<?php echo $get_current_user_data['User']['id']; ?>">
                  <input type="hidden" name="amount" value="<?php echo $subscription_data_plan['Subscription']['subscription_monthly_rate']; ?>">
                  <input type="hidden" name="cpp_header_image" value="http://priyank.crystalbiltech.com/droos/image/logo.png">
                  <input type="hidden" name="no_shipping" value="1">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="handling" value="0">
                  <input type="hidden" name="cancel_return" value="http://priyank.crystalbiltech.com/droos/">
                  <input type="hidden" name="return" value="http://priyank.crystalbiltech.com/droos/users/paypalresponse">
                  <input name="submit" type="submit"  class="hidden" value="Click to continue if you are not automatically redirected." />
                          <input name="submit" type="submit"  class="getstarted" value="Get Started" id="save_id"/>
                  </form> 
                        </div></td>
                      
                   

                </tr>
                    </table>
                    </div>
            </div>
            
                  <?php } ?>
            
            
            </div>
             <?php }else { ?>
                  <p>You are already having subscription see <a href="<?php echo $this->webroot . "users/myaccount"; ?>"> here </a>
                  <?php  } ?>
            <!--  -->
            
            
            
            
        </div>
    </div>
    
    
</div>