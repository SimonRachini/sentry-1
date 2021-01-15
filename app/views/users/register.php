<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="left-login">
<br>
<br><br>
<h1 type ="h1-left-login">Welcome to <br>Sentry!</h1>
<h2 type ="h2-left-login">Track your home security in real time</h2>
<br>
<h2 type ="h2-left-login">Already have an account?</h2>
<br>
<p><button type = "Login" class="Login"><b><a href ="<?php echo URLROOT;?>/users/login">SIGN IN</a></b></button></p>
</div>

<div class ="right-login">

 <div class ="login-form">
 
 <form name="form1" method = "POST" action = "<?php echo URLROOT;?>/users/register"  >
<h1 type="h1-right-login">Registration</h1>
<br>
<label type= "f_name"><b>Full Name</b></label>

	 <p><input type="f_name" placeholder="First Name" name="FIRST_NAME" id="f_name" class = "form-control"required></input>
&nbsp <input type="l_name" placeholder="Last Name" name="LAST_NAME" id="l_name"  class = "form-control" required></input></p>
<br>
    <label type="email"><b>Email</b></label>

	<p> <input type="email" placeholder="Enter Email" name="EMAIL" id="email"  class = "form-control"  required></input></p>
<br>
    <label type="password"><b>Password</b></label>
<br><br>
    <input type="password" placeholder="Enter Password" name="USER_PASSWORD" id="password"  class = "form-control" required></input>
<br><br>
    <label type="psw-repeat"><b>Verify Password</b>
<br><br>

    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" onkeyup='check();' required></input>
  <span id='message'>
  <br>
  </label>
<br><br>
 <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button type="submit" name = "signup" style ="color: #"class="registerbtn">Submit</button></p>
 
 </form>
</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
