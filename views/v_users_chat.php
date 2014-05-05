<h1>Hello <span class="post_user"><?=$user_name?> </span></h1>
<img src=<?=$profile_pic?>  width='150'>

Your virtual companion had read all about you!

Click below to start a chat seesion.


<form method = 'POST' action = '/users/p_chat'>
	<input type = 'submit' value = 'Chat Now!'>
</form>