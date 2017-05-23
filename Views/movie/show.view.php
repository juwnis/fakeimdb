<?php get_header($page_title); ?>

<h1><?php echo $movie->title; ?></h1>
	<img src='<?php echo $movie->coverPhoto; ?>' style="height:300px;
	width:300px;"">

<p>Release Year: <?php echo $movie->releaseYear; ?></p>
<p>Director: <a href="http://localhost/fakeimdb/directors/?id=<?php echo $movie->director->id;?>"><?php echo $movie->director->name(); ?></a></p>
<p>Category: <?php echo $movie->category->category_name; ?></p>
<h2>Actors:</h2>
<?php foreach ($movie->actors as $actor) { ?>
	<p><a href="http://localhost/fakeimdb/actors/?id=<?php echo $actor->id;?>"><?php echo  $actor->name(); ?></a></p>

<?php } ?>

<p><a href="/fakeimdb/movies/">Back</a></p>

<?php get_footer(); ?>
