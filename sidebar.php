<div class="sidebar">
<?php if($session->logged_in){ ?>
<ul id="<?php echo basename($_SERVER['PHP_SELF'],'.php') ?>">
	<li id="index"><a href="/index.php">Home<a></li>
	<li id="feed"><a href="/feed.php">Parts Feed<a></li>
	<li id="team"><a href="/myteam">My Team</a></li>
	<li id="kop"><a href="/kop">Kit of Parts</a></li>
	<li id="teamlist"><a href="/teamlist.php">Teams</a></li>
	<li id="events"><a href="/events.php">Events<a></li>
	<li id="settings"><a href="/settings.php">Settings<a></li>
</ul>
<ul id="sidebar-bottom">
	<li><a href="/process.php">Logout<a></li>
</ul>
<?php }else{?>
<ul>
	<li><a href="/login.php">Login</a></li>
	<li><a href="/kop">Kit of Parts</a></li>
	<li><a href="/events.php">Events<a></li>
</ul>
<?php }?>
</div>