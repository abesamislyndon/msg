<div id="wrapper">
   <header>
    <legend><h2 class="text-center"><i class="fa fa-paper-plane-o"></i>&nbsp;Give Some Wonderful Message!</h2></legend>
      </header>
       <div class = "scroll">
         <div class="masonry">
          <?php foreach ($all_message as $value): ?> 
           <div class="item" id = "serverData">
            <?php
               if ($value->img_name == null) {
               }
              else{ ?>
                <img src="<?php echo base_url("uploads/")?>/<?php echo $value->img_name.$value->ext ?>" class = "img-details">
               <?php } ?>
                <p><i class="fa fa-comment"></i>&nbsp;<?php echo $value->message ?></p>
                 <span class = "msg">from:</span>  
              <div class = "span-con">
                <span><?php echo $value->sender_name ?></span>     
              </div>  
           </div>
           <div class = "span-div"></div>
        <?php endforeach; ?>
      </div>
     </div> 
   </div>
