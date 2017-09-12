<div class="faq_text">
	<div class="container">
        	<div class="faq_heading">
            	<h2>Frequently Asked Questions</h2>
            	</div>
              <?php foreach ($data as $key => $value) { ?>
           <div class="faq_contest">
           	<h2><?php echo ++$key . ' '.$value['Faq']['question'];?></h2>
               <ul>
               <?php echo $value['Faq']['answer'];?>
               </ul>
           </div>  
            <?php } ?>    
        	</div>
    	</div>