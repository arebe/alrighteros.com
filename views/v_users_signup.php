<form method='POST' action='/users/p_signup'>
    Select your preferred virtual companion<br>
    <input type="radio" name="gender_pref" value="masculine" checked>Adam<br>
    <input type="radio" name="gender_pref" value="feminine">Eve<br>
    <input type="radio" name="gender_pref" value="neutral">Doesn't matter<br>
    <br><br>

   <?php if($error=="blank"): ?>
		<div class='error'>
		   Sign up failed. Please supply a valid user name, email, and password.
		</div>
		<br>
   <?php endif; ?>

   <?php if($error=="duplicate"): ?>
		<div class='error'>
		   Sign up failed. Someone has already registered that username or email address.
		</div>
		<br>
   <?php endif; ?>

    Username<br>
    <input type='text' name='user_name'>
    <div id='user_name_error'>Please enter user name (30 char max).</div> 
    <br><br>

    Email<br>
    <input type='text' name='email'>
	<div id='email_error'>Please enter valid email address.</div> 
    <br><br>

    Password<br>
    <input type='password' name='password'>
    <div id='password_error'>Please enter password (5 chars min).</div>
    <br><br>

    <div id='submit_button'><input type='submit' value='Sign up'></div>

</form>
