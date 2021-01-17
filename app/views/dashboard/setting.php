<?php require APPROOT . '/views/inc/header.php'; ?>


  <!--left navigational bar-->
  <div class="left_nav">
  <i class="fas fa-home fa-4x"></i>
  <li><?php echo $data['user']->FIRST_NAME; ?>'s Home</li>
  <br>
  <br>
  <br>
  <li>--------</li>
    <li><a href="<?php echo URLROOT; ?>/rooms/newroom">Add New Room</a></li>
    <li><a href="<?php echo URLROOT; ?>/users/setting">Settings</a></li>
    </div>


    <section id="set-profile">
      <div class="container">
        <div class="set-profile-form">
          <h1>Settings</h1>
      <h2>Profile</h2>
     
  
    
          <form action="<?php echo URLROOT;?>/users/setting" method="POST">
          
            <label for="set-name">Full Name</label>
            <input type="name" name="fname" id="first-name" placeholder="Emma" value="<?php echo $data['user']->FIRST_NAME ?>" required/>
			<input type="name" name="lname" id="last-name" placeholder="Watson" value="<?php echo $data['user']->LAST_NAME ?>"required/>
            <label for="new-device">Email Address</label>
            <input type="email" name="email" id="email-address" placeholder ="ewatson@gmail.com" value="<?php echo $data['user']->EMAIL ?>"required/>
            <label for="new-device">Phone Number</label>
            <input type="text" name="number" id="p-number" placeholder = "33 7 12 34 53 2" value="<?php echo $data['user']->PHONE_NUM ?>"required/>
			<label for="new-device">House Address</label>
            <input type="text" name="address" id="house-address" placeholder = "5 rue Dejean, Boulevard,75002"value="<?php echo $data['user']->ADDRESS ?>"required/>
			<label for="new-device" >Emergengy Contact</label>
<<<<<<< HEAD
            <input type="text" name="dnumber" id="emergency-contact" placeholder = "+33 7 12 34 53 2" value="<?php echo $data['ec']->PHONE_NUM ?>"required/>

            <div id="changepassword">
            <label for="new-device" >New Password</label>
            <input type="password" name="password" id="password" placeholder = "new password" />

            <label for="new-device" >Validate New Password
            <input type="password" name="psw-repeat" id="psw-repeat" placeholder = "new password" onkeyup='check();'  />
            <span id='message'>
              <br>
              </label>
            </div>
        <br><br>
=======
            <input type="text" name="dnumber" id="emergency-contact" placeholder = "+33 7 12 34 53 2" value="<?php echo $data['user']->EC_PHONE_NUM ?>"required/>
<br><br>
>>>>>>> b40a39a5fd74231f23af0ceeea51b0193bffd66e
            <input type="submit" value="Save" >
            
          </form>
         
        </div>
      </div>
    </section>
   
    <?php require APPROOT . '/views/inc/footer.php'; ?>