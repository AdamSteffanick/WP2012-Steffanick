<?php
/**
* The default template for displaying content
*
* Used for both single and index/archive/search.
*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemid="<?php the_permalink(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
  <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
  <div class="featured-post">
    <?php _e( 'Featured post', 'twentytwelve' ); ?>
  </div>
  <?php endif; ?>
  <header class="entry-header">
    <?php if ( ! post_password_required() && ! is_attachment() ) :
    the_post_thumbnail();
    endif; ?>

    <?php if ( is_single() ) : ?>
    <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
    <?php else : ?>
    <h1 class="entry-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark">
        <span itemprop="headline"><?php the_title(); ?></span>
      </a>
    </h1>
    <?php endif; // is_single() ?>
    <?php if ( comments_open() ) : ?>
    <div class="comments-link">
      <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
    </div><!-- .comments-link -->
    <?php endif; // comments_open() ?>
  </header><!-- .entry-header -->

  <div class="entry-byline-dateline">
    <span class="byline" itemprop="author creator" itemid="<?php echo get_the_author_meta('url'); ?>" itemscope itemtype="http://schema.org/Person">
      By
      <a href="<?php echo get_the_author_meta('url'); ?>" title="Visit <?php echo get_the_author(); ?>’s website">
        <span class="byline-author" data-byline-name="<?php echo get_the_author(); ?>" itemprop="name" data-twitter-handle="<?php echo get_the_author_meta('twitter'); ?>"><?php echo get_the_author(); ?></span>
      </a>
    </span>
    <time class="dateline" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished" content="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
    <meta itemprop="dateCreated" content="<?php echo get_the_date('c'); ?>" />
  </div><!-- .entry-byline-dateline -->

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>

  <div class="entry-content" itemprop="articleBody">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->
  <?php endif; ?>

  <footer class="entry-meta">
    <?php twentytwelve_entry_meta(); ?>
    <time class="dateline" datetime="<?php echo get_the_modified_date('c'); ?>" itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">Last updated <?php echo get_the_modified_date(); ?>.</time>
    <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
    <?php if ( is_singular() && get_the_author_meta( 'description' ) /*&& is_multi_author()*/ ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
    <div class="author-info">
      <div class="author-avatar">
        <?php
        /** This filter is documented in author.php */
        $author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
        ?>
      </div><!-- .author-avatar -->
      <div class="author-description">
        <address>
          <span itemprop="author creator" itemid="<?php echo get_the_author_meta('url'); ?>" itemscope itemtype="http://schema.org/Person">
            <a href="<?php echo get_the_author_meta('url'); ?>" title="Visit <?php echo get_the_author(); ?>’s website">
              <span itemprop="name" data-twitter-handle="<?php echo get_the_author_meta('twitter'); ?>"><?php echo get_the_author(); ?></span>
            </a>
          </span>
        </address>
        <p><?php the_author_meta( 'description' ); ?></p>
<!--        <div class="author-link">
          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
            <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
          </a>
        </div> .author-link -->
      </div><!-- .author-description -->
    </div><!-- .author-info -->
    <?php endif; ?>
  </footer><!-- .entry-meta -->
</article><!-- #post -->