<h2>Hello <span class="post_user"><?=$user_name?> </span></h2>
<div class = "chat_box">
<div class="rt">
	<img src=<?=$companion_pic?> class="companion_pic">
</div>
<div class="chat_text">
Your virtual companion has read all about you!
<br><br>

Maybe you'd like to break the ice? 

<br><br>
<span class="post_user"><?=$user_name?> </span>, tell me more about...<br>
<?=$private_thing?><br>

<br><br>
Click below to start a chat session.


<form method = 'POST' action = '/users/p_chat'>
	<input type = 'submit' value = 'Chat Now!'>
</form>
</div>
</div>