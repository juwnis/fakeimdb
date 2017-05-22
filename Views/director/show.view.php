<?php get_header($page_title); ?>

<h1><?php echo $director->firstName . " " . $director->lastName; ?></h1>

<p>Född: <?php echo $director->birthYear; ?></p>

<?php foreach ($director->movies as $movie) { ?>
	<h2><?php echo $movie->title; ?></h2>

<?php } ?>

<p><a href="/fakeimdb/directors/">Back</a></p>

<?php get_footer(); ?>
