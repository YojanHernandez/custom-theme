<?php
/*
Template Name: Home
*/
?>
<?php
get_header();
?>

<main id="primary" class="site-main">
    <?= get_template_part( 'template-parts/hero' ); ?>
    <div class="container">
       <div class="row py-5">
           <div class="col">
               <?= get_template_part( 'template-parts/custom', 'form' ); ?>
           </div>

           <div class="col">
               <?= get_template_part( 'template-parts/hubspot', 'form' ); ?>
           </div>   
       </div>
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_footer();
?>
