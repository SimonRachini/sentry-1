<?php require APPROOT . '/views/inc/header.php'; ?>



  <!--left navigational bar-->
  <div class="left_nav">
    <i class="fas fa-home fa-4x"></i>
    <li>Emma's Home</li>
    <br>
    <li><a href="#Livingroom">Living Room</a></li>
    <li><a href="#Kitchen">Kitchen</a></li>
    <li><a href="#Bedroom1">Bedroom1</a></li>
    <li><a href="#Foyer">Foyer</a></li>
    <br>
    <br>
    <li>--------</li>
      <li><a href="AddNewRoom.html">Add New Room</a></li>
      <li><a href="Setting.html">Settings</a></li>
    </div>


  <div class="module3">
   
  
  <span>
    <h1>&nbsp;<?php echo $data['room']->ROOM_NAME ?></h1> 
    <h3>&nbsp;Sensors</h3>
    
    <?php foreach($data['sensors'] as $sensor) : ?>
      <div class="img" id='backgroundImg'	>
	  <div id="logoKitchenDiv" class="logoKitchen"></div> 
    <div class="sensortype"><?php echo $sensor->SENSOR_NAME ?>
    <br>
      <br>
    <?php echo $sensor->SENSOR_VALUE  ?>
   <?php if ($sensor->SENSOR_UNITS == "celsius"):?>
    &#8451;
    <?php elseif($sensor->SENSOR_UNITS == "m^3"): ?>
    &#13221;
    <?php endif;?>
    </div>
  <div class="status">Status: <?php
   if ($sensor->SENSOR_STATUS == 1){
    echo 'Active';
   }elseif($sensor->SENSOR_STATUS == 0){
    echo  'Inactive';
   }else{
     echo 'error';
   }
   
   
   ?> </div>
    </div>

<?php endforeach; ?>

  </span>
</div>
 

  <div class="module1" style="display:inline-block;">
  
    
  <span>
    <h3>&nbsp;Devices</h3> 
   
	
    <?php foreach($data['devices'] as $device) : ?>
      <div class="img1">
    <div class="conte"><?php echo $device->DEVICE_NAME ?></div>
    <div class="conte">Status: <?php
   if ($device->DEVICE_STATUS == 1){
    echo 'On';
   }elseif($device->DEVICE_STATUS == 0){
    echo  'Off';
   }else{
     echo 'error';
   }
   
   
   ?></div>
    </div>


  <?php endforeach; ?>
 
	 
  </span> 
  <span></span> 
  
 <div class="module2" style="display:inline-block;">

    <div class="button-device">Add New Device</div> 
 
  </div>
    </div>
  
   
	

     


</body>

<script>
   
	
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
