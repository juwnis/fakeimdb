<?php get_header($page_title); ?>

<h1><?php echo $director->name(); ?></h1>
<img src='<?php echo $director->coverPhoto; ?>' style="height:300px;width:300px;">

<p>Ålder: <?php echo $director->age(); ?></p>

<h2>Filmer</h2>
<?php foreach ($director->movies as $movie) { ?>
	<p><a href="http://localhost/fakeimdb/movies/?id=<?php echo $movie->id;?>"><?php echo $movie->title; ?></a></p>

<?php } ?>


<p><a href="/fakeimdb/directors/">Back</a></p>

<?php get_footer(); ?>
