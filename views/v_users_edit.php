<form method='POST' action='/users/p_update'>
   Editing profile for: <span class="post_user"><?=$user_name?></span>
	<br><br>
	<div class="edit_profile_box">

	<div class="rt">
		Change your profile picture<br>
		<br><br>
		<form method='POST' enctype="multipart/form-data" action='/users/p_upload/'>
		
		<input type='file' name='upload'>
		<input type='submit' value="Upload profile picture">

		<form>
	</div>

	<em>Current email: <?=$email?></em><br>
    Change email to: <input type='text' name='email'>
	<br><br>

    Change password: <input type='password' name='password'>
    <br><br>
</div>
<div class="edit_profile_box">

	<em>Your virtual companion wants to get to know you! </em>
	<br><br>

    Tell me a little about yourself. What's your self-summary?<br>

    <input type='text' name='self_sum' class="profile_input">
	<br><br>

    What are you doing with your life?<br>

    <input type='text' name='doing_life' class="profile_input">
	<br><br>


    What is something you feel like you're really good at?<br>

    <input type='text' name='good_at' class="profile_input">
	<br><br>
    
    What are some of your favorite movies, books, food, and music?<br>

    <input type='text' name='favorite_things' class="profile_input">
    <br><br>

    On a typical Friday night you are usually…<br>

    <input type='text' name='friday_night' class="profile_input">
	<br><br>
    
    What's the most private thing you're willing to admit?<br>

    <input type='text' name='private_thing' class="profile_input">
	<br><br>

    What are you looking for in a companion?<br>

    <input type='text' name='companion_traits' class="profile_input">
	<br><br>

    What's your birth day?<br>

    <input type='text' name='dob' class="profile_input">
	<br><br>

	What' country do you live in?<br>

    <input type='text' name='country' class="profile_input">
	<br><br>

	<input type='submit' value='Update user profile'>
	<br><br>

</form>
</div>


