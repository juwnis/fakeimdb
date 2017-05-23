<?php get_header($page_title); ?>

<h1><?php echo $actor->name(); ?></h1>
<p>Ålder: <?php echo $actor->age(); ?></p>
<img src='<?php echo $actor->coverPhoto; ?>' style="height:300px;width:300px;">
<h2>Filmer</h2>
<?php foreach ($actor->movies as $movie) { ?>

	<p>Titel: <a href="http://localhost/fakeimdb/movies/?id=<?php echo $movie->id;?>"><?php echo $movie->title; ?></a></p>
	<p>Genre: <?php echo $movie->category->category_name; ?></p>
	<hr>

<?php } ?>

<p><a href="/fakeimdb/actors/">Back</a></p>

<?php get_footer(); ?>
