<h1>This is the profile for <span class="post_user"><?=$user_name?> </span></h1>
<img src=<?=$profile_pic?>  width='150'>
<br><br>

My self-summary: <br>
<div class="user_info"><?=$self_sum?></div>
<br><br>

What I'm doing with my life: <br>
<div class="user_info"><?=$doing_life?></div>
<br><br>

I'm really good at: <br>
<div class="user_info"><?=$good_at?></div>
<br><br>

My favorite food, books, music, and movies: <br>
<div class="user_info"><?=$favorite_things?></div>
<br><br>

On a typical Friday night, you'll find me: <br>
<div class="user_info"><?=$friday_night?></div>
<br><br>

The most private thing I'm willing to tell you: <br>
<div class="user_info"><?=$private_thing?></div>
<br><br>

In a companion, I'm seeking: <br>
<div class="user_info"><?=$companion_traits?></div>
<br><br>

My birthday: <br>
<div class="user_info"><?=$dob?></div>
<br><br>

I live in this country: <br>
<div class="user_info"><?=$country?></div>
<br><br>


<form method = 'POST' action = '/users/edit' class='<?=$edit_profile?>'>
	<input type = 'submit' value = 'Edit profile'>
</form>