<div id="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <?php $attribute = Array ("id" => "Form", "Class "=>"form-horizontal");
          echo  form_open_multipart('messageForm/approved_message', $attribute);?>
         <table>
          <th>MESAGE ID</th>
          <th>SENDER</th>
          <th>MESSAGE</th>
           <th>ACTION</th>
          <?php foreach ($pending_message as $value):?>
          <tr>
            <td><?php echo $value->message_id?></td>
            <td><?php echo $value->sender_name?></td>
            <td><?php echo $value->message?></td>
             <td><a href="<?php echo base_url();?>messageForm/approved_message/<?php echo $value->message_id ?>" class = "checkin-style1">approved</a></td>
          </tr>
        <?php endforeach;?>
        </table>
      </form>
      </div>
    </div>
  </div>
</div>
