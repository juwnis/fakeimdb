<?php get_header($page_title); ?>

<h1><?php echo $actor->firstName . " " .  $actor->lastName; ?></h1>

<p>Född: <?php echo $actor->birthYear; ?></p>

<?php foreach ($actor->movies as $movie) { ?>
	<h2><?php echo $movie->title; ?></h2>

<?php } ?>

<p><a href="/fakeimdb/actors/">Back</a></p>

<?php get_footer(); ?>
