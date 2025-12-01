<?php
/**
 * The header for our theme
 *
 * @package Custom_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'www.googletagmanager.com(j,f);
    })(window,document,'script','dataLayer','GTM-XXXXXX');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="www.googletagmanager.com"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'custom-theme' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">

                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                    <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $description; ?></p>
                        <?php
                    endif;
                ?>
            </div><!-- .site-branding -->

        </div><!-- .container -->
    </header><!-- #masthead -->
