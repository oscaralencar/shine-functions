<?php
if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

get_header();
?>

<h2>Posts:</h2>

<ul>
	<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</li>
	<?php endwhile; ?>
</ul>

<?php get_template_part( 'template-parts/events/list-home' ); ?>

<?php get_footer(); ?>
