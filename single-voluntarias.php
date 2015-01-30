<?php get_header(); ?>

<section id="detail" class="container">
	<?php while ( have_posts() ) : the_post(); ?>
	<article class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

		<div class="sectionhead">
			<h1><?php _e( 'O Grupo', 'womoz' ); ?></h1>
			<h4><?php _e( 'Conheça algumas voluntárias do WoMoz', 'womoz' ); ?></h4>
			<hr class="separetor">
		</div>

		<div class="addthis">

		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php if( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('323-243', array( 'class' => 'img-responsive' ) ); ?>
					<small><?php the_title(); ?></small>
				<?php else: ?>
					<img class="img-responsive" src="http://placehold.it/323x243" width="323" height="243" alt="<?php the_title(); ?>">
					<small><?php the_title(); ?></small>
				<?php endif; ?>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<?php the_content(); ?>
			</div>
		</div>

	</article>
	<?php endwhile; ?>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>