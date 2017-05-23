<?php get_header($page_title); ?>

<h1>Actors</h1>

<ul>
	<?php foreach ($actors as $actor) { ?>
		<li><a href="/fakeimdb/actors/?id=<?php echo $actor->id; ?>"><?php echo $actor->name(); ?></a></li>
	<?php } ?>
</ul>

<?php get_footer(); ?>
