<?php get_header($page_title); ?>

<h1>Movies</h1>

<ul>
	<?php foreach ($movies as $movie) { ?>
		<li><a href="/fakeimdb/movies/?id=<?php echo $movie->id; ?>"><?php echo $movie->title . $movie->category_name; ?></a></li>
	<?php } ?>
</ul>

<?php get_footer(); ?>
