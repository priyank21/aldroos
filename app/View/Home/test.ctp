<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='your_seller_id'; // Business email ID
?>
<h4>Welcome, Guest</h4>

<div class="product">            
    <div class="image">
        <img src="http://priyank.crystalbiltech.com/droos/image/logo.png" />
    </div>
    <div class="name">
        PHPGang Payment
    </div>
    <div class="price">
        Price:$10
    </div>
    <div class="btn">
    <form  action="https://www.sandbox.paypal.com/webscr" method="post">
    <input type="hidden" name="business" value="priyank.xornor@gmail.com">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="PHPGang Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="10" id="hey">
    <input type="hidden" name="cpp_header_image" value="http://priyank.crystalbiltech.com/droos/image/logo.png">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://priyank.crystalbiltech.com/droos/users/signup/">
    <input type="hidden" name="return" value="http://priyank.crystalbiltech.com/droos/users/signup/">
    <input name="submit" type="submit" id="submit" class="hidden" value="Click to continue if you are not automatically redirected." />
    
    </form> 
    </div>
</div>