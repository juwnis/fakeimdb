<?php get_header($page_title); ?>

<h1>Directors</h1>

<ul>
	<?php foreach ($directors as $director) { ?>
		<li><a href="/fakeimdb/directors/?id=<?php echo $director->id; ?>"><?php echo $director->name(); ?></a></li>
	<?php } ?>
</ul>

<?php get_footer(); ?>
