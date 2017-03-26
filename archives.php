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
				<h2>Categories</h2>
<div class="panel panel-default">
<div class="panel-body">
				<ul>
					<?php wp_list_categories('title_li=&feed=RSS'); ?>
				</ul>
</div><!-- .panel-body -->
</div><!-- .panel -->

				<h2>Tags</h2>
<div class="panel panel-default">
<div class="panel-body">
					<?php
          $args =
            array(
            	'smallest'                  => 14, 
            	'largest'                   => 14,
            	'unit'                      => 'px', 
            	'format'                    => 'list',
            );
					wp_tag_cloud($args); ?>

</div><!-- .panel-body -->
</div><!-- .panel -->

        <h2>Recent</h2>
<div class="panel panel-default">
<div class="panel-body">
        <ul>
        <?php
        	$recent_posts = wp_get_recent_posts();
        	foreach( $recent_posts as $recent ){
        		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
        	}
        	wp_reset_query();
        ?>
        </ul>

</div><!-- .panel-body -->
</div><!-- .panel -->

		</div><!-- .entry-content -->
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>