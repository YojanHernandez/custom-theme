<?php
/**
 * Template part for displaying a HubSpot form
 * 
 * @package Custom_Theme
 * 
 * @param string $src
 * @param string $region
 * @param string $formId
 * @param string $portalId
 */

$src = $src ?? "https://js.hsforms.net/forms/embed/49039958.js";
$region = $region ?? "na1";
$formId = $formId ?? "a5b48d54-c068-434c-992a-a2f5513b7ada";
$portalId = $portalId ?? "49039958";

?>
<script src="<?= $src; ?>" defer></script> 
<div class="hs-form-frame" data-region="<?= $region; ?>" data-form-id="<?= $formId; ?>" data-portal-id="<?= $portalId; ?>"></div>