<?php get_header($page_title); ?>

<h1>Actors</h1>

<ul>
	<?php foreach ($actors as $actor) { ?>
		<li><a href="/fakeimdb/actors/?id=<?php echo $actor->id; ?>"><?php echo $actor->name(); ?></a></li>
	<?php } ?>
</ul>

<?php
	if (isset($_POST['actor_name'])) {
		echo "POST save actor with name: " . $_REQUEST['actor_name'] . "!<br>";
	} else if (isset($_GET['actor_name'])) {
		echo "GET save actor with name NOT DO!: " . $_REQUEST['actor_name'] . "!<br>";
	}
?>

<h1>Create Actor</h1>
<form method="POST">
	<label for="actor_name">Actor Name:</label>
	<input type="text" name="actor_name" id="actor_name">
	<hr>
	<label for="actor_lastname">Actor Lastname:</label>
	<input type="text" name="actor_lastname" id="actor_lastname">
	<hr>
	<label for="actor_birthyear">Actor Birthyear:</label>
	<input type="text" name="actor_birthyear" id="actor_birthyear">
	<hr>
	<label for="actor_photo">Actor Photo URL:</label>
	<input type="text" name="actor_photo" id="actor_photo">
	<hr>

	<input type="submit" value="Create Actor">
</form>

<?php get_footer(); ?>
