<?php get_header($page_title); ?>

<h1><?php echo $director->name(); ?></h1>

<p>Ålder: <?php echo $director->age(); ?></p>
<h2>Filmer</h2>
<?php foreach ($director->movies as $movie) { ?>
	<p><?php echo $movie->title; ?></p>

<?php } ?>

<p><a href="/fakeimdb/directors/">Back</a></p>

<?php get_footer(); ?>
