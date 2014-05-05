<h1>This is the profile for <span class="post_user"><?=$user_name?> </span></h1>
<img src=<?=$profile_pic?>  width='150'>



<form method = 'POST' action = '/users/edit' class='<?=$edit_profile?>'>
	<input type = 'submit' value = 'Edit profile'>
</form>