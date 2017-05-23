<?php get_header($page_title); ?>

<h1><?php echo $actor->name(); ?></h1>
<img src="https://cdn.theatlantic.com/assets/media/img/mt/2016/07/AP_671014678252/lead_960.jpg?1469555650">
<p>Ålder: <?php echo $actor->age(); ?></p>
<h2>Filmer</h2>
<?php foreach ($actor->movies as $movie) { ?>
	<p>Titel: <?php echo $movie->title; ?></p>
	<p>Genre: <?php echo $movie->category->category_name; ?></p>
	<hr>

<?php } ?>

<p><a href="/fakeimdb/actors/">Back</a></p>

<?php get_footer(); ?>
