<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php the_post(); ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<section class="directory">
				<h1>Topics</h1>
				<ul>
					<?php wp_list_categories('title_li=&feed=RSS'); ?>
				</ul>
			</section>
			<section class="directory">
				<h1>Tags</h1>
				<ul>
					<?php wp_tag_cloud(); ?>
				</ul>
			</section>
		</div><!-- .entry-content -->
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>