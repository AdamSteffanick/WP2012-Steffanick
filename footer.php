<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
  </div><!-- #main .wrapper -->
  <footer id="colophon">
    <div class="site-info">
      <?php do_action( 'twentytwelve_credits' ); ?>
      <p>&copy;<?php theme_copyright('2009') ?>
        <a href="https://www.steffanick.com/adam/" title="Adam Steffanick">Adam Steffanick</a>
        <a href="https://validator.w3.org/nu/?doc=https://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" aria-label="Validate HTML5" target="_blank" rel="nofollow" title="Validate as HTML5">
          <span class="fa fa-html5" aria-hidden="true"></span>
        </a>
      </p>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>