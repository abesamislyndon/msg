
 <?php $attribute = Array ("id" => "Form", "Class "=>"form-horizontal");
 echo  form_open_multipart('messageForm/do_add_message', $attribute);
  ?>
<div class="container">
<legend><h2 class="text-center"><i class="fa fa-paper-plane-o"></i>&nbsp;Give Some Wonderful Message!</h2></legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name"></label>  
  <div class="col-md-4">
  <input id="Name" name="sender_name" placeholder="Your Name" class="form-control input-md" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Message"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Message" name="message" placeholder="give some message" ></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name"></label>  
  <div class="col-md-4">
  <input id="Name" name="userfile" placeholder="Your Photo" class = "custom-file-input" type="file">
 </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Send"></label>
  <div class="col-md-4">
   <input type="submit" name  ="submit" value="Post Message" id = "AddMoreFileBox" class = "checkin-style"/>
  </div>
</div>

</form>

