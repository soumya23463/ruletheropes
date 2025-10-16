<?php

/**
 * Navbar branding
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! has_custom_logo()) { ?>

<?php if (is_front_page() && is_home()) : ?>

<h1 class="navbar-brand mb-0">
    <a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
        <?php bloginfo('name'); ?>
    </a>
</h1>

<?php else : ?>

<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
    <?php bloginfo('name'); ?>
</a>

<?php endif; ?>

<?php
} else {
?>
<div class="custom-logo-wrapper" style="height: 100px;">
    <?php the_custom_logo(); ?>
</div>
<style>
/* .custom-logo-wrapper .custom-logo-link {
    display: inline-block;
    height: 100px;
} */

.custom-logo-wrapper .custom-logo-link img {
    height: 85px;
    width: auto;
}
</style>
<?php
}