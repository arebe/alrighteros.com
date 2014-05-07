<div class = "welcomebox">
	<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', <span class="post_user">'.$user->user_name."</span>"; ?></h1>
	<h4 class="landing">where everyday people find romance</h4>
	<p><span class="new">Get started!</span>
	<ul>
		<li>Fill out your <a href='/users/profile/<?=$user->user_id?>'>PROFILE</a> page</li>
		<li>Take <a href='/quizzes/view'>QUIZZES</a> to increase your match score</li>
		<li><a href='/users/upgrade'>UPGRADE</a> for extra features - including interactive video mode!</li>
	    <li><a href='/users/chat'>LIVE CHAT</a> with your perfectly-callibrated virtual companion.</li>
	</ul>
	</div>