<?php 
	/**
 * Template name: Why? 
 *
 * @package Postcarding2
 * @since Postcarding2 1.0
 */
 get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="stage">
			<div class="post" >
			<h1 class="why"><?php the_title(); ?></h1>
			<div class="content">
				<?php the_content(); ?>
			</div>
			</div><!--/post-->
		</div><!--/stage-->
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
<?php get_footer(); ?>