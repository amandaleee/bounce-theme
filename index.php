<?php 
	/**
 * The Template for displaying all single posts.
 *
 * @package Postcarding2
 * @since Postcarding2 1.0
 */
 get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="stage">
			<div id="traveler">
				<div class="addressform" id="bouncer">
					<?php the_title(); ?>
					<?php the_content(); ?>
				</div>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div><!--/traveler-->
	</div><!--/stage-->

<?php get_footer(); ?>