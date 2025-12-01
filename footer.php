<?php
/**
 * The template for displaying the footer
 *
 * @package Custom_Theme
 */
?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <p>
            &copy; <?= date( 'Y' ); ?> 
            <a href="<?= esc_url( home_url( '/' ) ); ?>"><?= bloginfo( 'name' ); ?></a>
        </p>
    </div><!-- .container -->
</footer><!-- #colophon -->

<!-- Bootstrap Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>
