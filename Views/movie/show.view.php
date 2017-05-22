<?php get_header($page_title); ?>

<h1><?php echo $movie->title; ?></h1>

<p>Release Year: <?php echo $movie->releaseYear; ?></p>
<p>Director: <?php echo $movie->director->name(); ?></p>
<p>Category: <?php echo $movie->category->category_name; ?></p>
<h2>Actors:</h2>
<?php foreach ($movie->actors as $actor) { ?>
	<p><?php echo  $actor->name(); ?></p>

<?php } ?>

<p><a href="/fakeimdb/movies/">Back</a></p>

<?php get_footer(); ?>
