<?php get_header($page_title); ?>

<h1>Welcome to fakeimdb</h1>
	<form method="POST">
		<label for="actor">Actor:</label>
		<select name="actor">
			<?php foreach ($actors as $actor) {

	   			echo '<option value=" '.$actor->id. ' ">'.$actor->name() . '</option>';

	   		}
	   		?>
		</select>
		<hr>
		<label for="movie">Movie:</label>
		<select name="movie">
			<?php foreach ($movies as $movie) {

	   			echo '<option value=" '.$movie->id. ' ">'.$movie->title . '</option>';

	   		}
	   		?>
		</select>
		<hr>
		<input type="submit" name="add" value="Connect actor to movie">
		<input type="submit" name="remove" value="Remove actor from movie">
	</form>


<?php get_footer(); ?>
