<form method='POST' action='/users/p_update'>
   Username / login: <span class="post_user"><?=$user_name?></span>
	<br><br>

   Email: <?=$email?><br>
   Change email to: <input type='text' name='email'>
	<br><br>

   Change password: <input type='password' name='password'>
   <br><br>

	<input type='submit' value='Update user profile'>
	<br><br>

</form>

<form method='POST' enctype="multipart/form-data" action='/users/p_upload/'>
	
	<input type='file' name='upload'>
	<input type='submit' value="Upload profile picture">

<form>
