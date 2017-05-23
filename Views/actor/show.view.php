<?php get_header($page_title); ?>

<h1><?php echo $actor->name(); ?></h1>
	
<img src='<?php echo $actor->coverPhoto; ?>'> 

<p>Ålder: <?php echo $actor->age(); ?></p>
<h2>Filmer</h2>
<?php foreach ($actor->movies as $movie) { ?>
	<p>Titel: <?php echo $movie->title; ?></p>
	<p>Genre: <?php echo $movie->category->category_name; ?></p>
	<hr>

<?php } ?>

<p><a href="/fakeimdb/actors/">Back</a></p>

<?php get_footer(); ?>
