<?php
/**
 * Template part for displaying a Hero section
 * 
 * @package Custom_Theme
 * 
 * @param string $title
 * @param string $subtitle
 * @param string $button_text
 * @param string $button_url
 * 
 */

$hero_title = $hero_title ?? "¡Acepta pagos en línea!";
$hero_subtitle = $hero_subtitle ?? "Ofrece a tus clientes diversos medios de pago y herramientas de cobro simplificadas de forma rápida y segura, no importa el tamaño de su negocio, ePayco se adapta a tus necesidades.";
$hero_button_text = $hero_button_text ?? "";
$hero_button_url = $hero_button_url ?? "";
$hero_backgrod_url = $hero_backgrod_url ?? "";
?>

<div class="hero container-fluid" style="background-image: url(<?= $hero_backgrod_url; ?>)">
    <div class="row justify-content-center align-items-center text-center text-white">
        <div class="col col-md-6">
            <?php if ( $hero_title ) : ?>
                <h1><?= $hero_title; ?></h1>
            <?php endif; ?>
            <?php if ( $hero_subtitle ) : ?>
                <p><?= $hero_subtitle; ?></p>
            <?php endif; ?>
            <?php if ( $hero_button_text && $hero_button_url ) : ?>
                <a href="<?= $hero_button_url; ?>"><?= $hero_button_text; ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>