<form method='POST' action='/users/p_update'>
   Username / login: <span class="post_user"><?=$user_name?></span>
	<br><br>
	Your virtual companion wants to get to know you! 

    Tell us a little about yourself. What's your self-summary?<br>

    <input type='text' name='self_sum' size="150">
	<br><br>

    What are you doing with your life?<br>

    <input type='text' name='doing_life' size="150">
	<br><br>


    What is something you feel like you're really good at?<br>

    <input type='text' name='good_at' size="150">
	<br><br>
    
    What are some of your favorite movies, books, food, and music?<br>

    <input type='text' name='favorite_things' size="150">
    <br><br>

    On a typical Friday night you are usually…<br>

    <input type='text' name='friday_night' size="150">
	<br><br>
    
    What's the most private thing you're willing to admit?<br>

    <input type='text' name='private_thing' size="150">
	<br><br>

    What are you looking for in a companion?<br>

    <input type='text' name='companion_traits' size="150">
	<br><br>

    What's your birth day?<br>

    <input type='text' name='dob' size="150">
	<br><br>

	What' country do you live in?<br>

    <input type='text' name='country' size="150">
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
