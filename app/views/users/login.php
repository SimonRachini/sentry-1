<?php require APPROOT . '/views/inc/header.php'; ?>


<div class = "left-login">
<br><br><br>
<h1 class ="h1-left-login">Welcome to<br> Sentry!</h1>
<h2 class ="h2-left">Track your home security in real time</h2>
<br>
<h2>Do you want to Register?</h2>
  <br>
	
  <button type = "Login" class="Login"><b><a href ="<?php echo URLROOT;?>/users/register">Register</a></b></button>
</div>

<div class = "right-login">

 <div class ="login-form">
<form method = "POST" action = "<?php echo URLROOT;?>/users/login">
<h1 type="h1-right-login">Login</h1>
<br><br>

  <label type="email"><b>Email</b></label>
<br>
	<input type="email" placeholder="Enter Email" name="EMAIL" id="email" required></input></p>

<br>
    <label type="password"><b>Password</b></label>
<br><br>
    <input type="password" placeholder="Enter Password" name="USER_PASSWORD" id="password" required></input>


 <br> <br> <br> <br>
    
 
  <p>&nbsp&nbsp&nbsp&nbsp&nbsp
 <button type="submit" name = "login" style ="color: #"class="Login">Login</button></p>
 </form>
</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>