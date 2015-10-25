<?php
/**
 * The template for displaying all single posts and attachments
 * Template Name: WeConnect bla
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('home'); ?>

<div class="android-be-together-section mdl-typography--text-center">
	<div class="mdl-grid">
	  	<div class="mdl-cell mdl-cell--12-col ">
	  		<!-- claim -->
	  		<div class="mdl-grid">
		  		<div class="mdl-cell mdl-cell--4-col"></div>
		  		<div class="mdl-cell mdl-cell--4-col">
	  				<div class="android-font android-slogan">
			          	WeConnect<br />
			          	refugees and locals<br />
			          	through common<br />
			          	interests and passions.
			        </div>
			       </div>
	  			<div class="mdl-cell mdl-cell--4-col"></div>
			</div>
			<!-- Getting started button -->
			<div class="mdl-grid">
		  		<div class="mdl-cell mdl-cell--5-col"></div>
		  		<div class="mdl-cell mdl-cell--2-col">
		  			<div class="stage__enty_button">
		  			<button>
	        	  		Get Started
	          		</button>
	          	</div>
	          	</div>
		  		<div class="mdl-cell mdl-cell--5-col"></div>
			</div>
			<div class="mdl-grid">
		  		<div class="mdl-cell mdl-cell--4-col"></div>
		  		<div class="mdl-cell mdl-cell--4-col">
		  			<i class="icon-arrow_down stage__button--down"></i>
	          	</div>
		  		<div class="mdl-cell mdl-cell--4-col"></div>
			</div>
	  	</div>
	</div>
</div>
<div class="main">


          <!--a href="#screens">
            <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
          </a-->
   <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col stage">
  	<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>
	  <div class="mdl-cell mdl-cell--6-col">
	  	<object data="/wp-content/themes/weconnect/images/infographic_without_text.svg" type="image/svg+xml">
		</object>
	  </div>
	  <div class="mdl-cell mdl-cell--3-col"></div>
	</div>
  </div>
</div>     
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col stage">
  	<div class="mdl-grid">
	  <div class="mdl-cell mdl-cell--4-col">1</div>
	  <div class="mdl-cell mdl-cell--4-col">1</div>
	  <div class="mdl-cell mdl-cell--4-col">1</div>
	</div>
  </div>
</div>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
</div>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col">4</div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
</div>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">6</div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
  <div class="mdl-cell mdl-cell--2-col">2</div>
</div>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">6 (8 tablet)</div>
  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">4 (6 tablet)</div>
  <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">2 (4 phone)</div>
</div>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
  	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="lpost-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer('home'); ?>
