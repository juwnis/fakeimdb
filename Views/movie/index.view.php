<?php get_header($page_title); ?>

<h1>Movies</h1>

<ul>
	<?php foreach ($movies as $movie) { ?>
		<li><a href="/fakeimdb/movies/?id=<?php echo $movie->id; ?>"><?php echo $movie->title . $movie->category_name; ?></a></li>
	<?php } ?>
</ul>
<h1>Create Movies</h1>
<form method="POST">
	<label for="movie_name">Movie name:</label>
	<input type="text" name="movie_name" id="movie_name">
	<hr>
	<label for="coverPhoto">CoverPhoto :</label>
	<input type="text" name="coverPhoto" id="coverPhoto">
	<hr>
	<label for="releaseYear">ReleaseYear:</label>
	<input type="text" name="releaseYear" id="releaseYear">
	<hr>
	<label for="category">Category:</label>
	<select name="category">
	    <option value="1">Action</option>
	    <option value="2">Comedy</option>
	    <option value ="3">Thriller</option>
	</select>
	<hr>
	<label for="director">Director:</label>
	<select name="director">
	   <?php foreach ($directors as $director) {

	   			echo '<option value=" '.$director->id. ' ">'.$director->firstName . '</option>';

	   }
	   ?>
	</select>
	<hr>


	<input type="submit" value="Create Movie">
</form>

<?php get_footer(); ?>
