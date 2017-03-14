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

  <div class="entry-byline-dateline entry-meta">
    <span class="byline" itemprop="author creator copyrightHolder" itemid="<?php echo get_the_author_meta('url'); ?>" itemscope itemtype="http://schema.org/Person">
      By
      <span class="author vcard">
        <a class="url fn n" href="<?php echo get_the_author_meta('url'); ?>" title="Visit <?php echo get_the_author(); ?>’s website">
          <span class="byline-author" data-byline-name="<?php echo get_the_author(); ?>" itemprop="name" data-twitter-handle="<?php echo get_the_author_meta('twitter'); ?>">
            <?php echo get_the_author(); ?>
          </span>
        </a>
      </span>
    </span>
    <meta itemprop="copyrightYear" content="<?php echo get_the_date('Y'); ?>">
    <meta itemprop="dateCreated" content="<?php echo get_the_date('c'); ?>">
    <span class="dateline posted-on">
      <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished" content="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
      </time>
      (last updated
      <time class="updated" datetime="<?php echo get_the_modified_date('c'); ?>" itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
        <?php echo human_time_diff(get_the_modified_time('U'), current_time('U')); ?>
      </time>
      ago)
    </span>
  </div><!-- .entry-byline-dateline -->

  <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <meta itemprop="url" content="https://www.steffanick.com/android-chrome-192x192.png">
      <meta itemprop="width" content="192">
      <meta itemprop="height" content="192">
    </div>
    <meta itemprop="name" content="Steffanick">
  </div>
  <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
    <meta itemprop="url" content="https://www.steffanick.com/android-chrome-192x192.png">
    <meta itemprop="width" content="192">
    <meta itemprop="height" content="192">
  </div>

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
    <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
    <hr />
    <?php if ( is_singular() && get_the_author_meta( 'description' ) ) : // If a user has filled out their description show a bio on their entries. ?>
    <div class="author-info media">
      <div class="author-avatar media-left">
        <?php
        /** This filter is documented in author.php */
        $author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 64 );
        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
        ?>
      </div><!-- .author-avatar -->
      <div class="author-description media-body">
        <address>
          <span class="media-heading">
            <a href="<?php echo get_the_author_meta('url'); ?>" title="Visit <?php echo get_the_author(); ?>’s website">
              <span><?php echo get_the_author(); ?></span>
            </a>
          </span>
        </address>
        <p><?php the_author_meta( 'description' ); ?></p>
      </div><!-- .author-description -->
    </div><!-- .author-info -->
    <hr />
    <?php endif; ?>
  </footer><!-- .entry-meta -->
</article><!-- #post -->