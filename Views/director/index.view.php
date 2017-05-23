<?php get_header($page_title); ?>

<h1>Directors</h1>

<ul>
	<?php foreach ($directors as $director) { ?>
		<li><a href="/fakeimdb/directors/?id=<?php echo $director->id; ?>"><?php echo $director->name(); ?></a></li>
	<?php } ?>
</ul>
<?php
	if (isset($_POST['director_name'])) {
		echo "POST save director with name: " . $_REQUEST['director_name'] . "!<br>";
	} else if (isset($_GET['director_name'])) {
		echo "GET save director with name NOT DO!: " . $_REQUEST['director_name'] . "!<br>";
	}
?>
<h1>Create Director</h1>
<form method="POST">
	<label for="director_name">Director Name:</label>
	<input type="text" name="director_name" id="director_name">
	<hr>
	<label for="director_lastname">Director Lastname:</label>
	<input type="text" name="director_lastname" id="director_lastname">
	<hr>
	<label for="director_birthyear">Director Birthyear:</label>
	<input type="text" name="director_birthyear" id="director_birthyear">
	<hr>
	<label for="director_photo">Director Photo URL:</label>
	<input type="text" name="director_photo" id="director_photo">
	<hr>

	<input type="submit" value="Create director">
</form>


<?php get_footer(); ?>
