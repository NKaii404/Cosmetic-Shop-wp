<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */
?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$hair_spa_salon_no_of_footer_col = get_theme_mod('hair_spa_salon_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$hair_spa_salon_col_lg_footer_class = 'col-lg-' . (12 / $hair_spa_salon_no_of_footer_col);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$hair_spa_salon_col_md_footer_class = 'col-md-' . (12 / $hair_spa_salon_no_of_footer_col);
?>
<div class="container">
    <aside class="widget-area row py-2 pt-3" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'hair-spa-salon' ); ?>">
        <div class="<?php echo esc_attr($hair_spa_salon_col_lg_footer_class); ?> <?php echo esc_attr($hair_spa_salon_col_md_footer_class); ?>">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php
        // Footer boxes 2 and onwards.
        for ($i = 2; $i <= $hair_spa_salon_no_of_footer_col; $i++) :
            if ($i <= $hair_spa_salon_no_of_footer_col) :
                ?>
               <div class="col-12 <?php echo esc_attr($hair_spa_salon_col_lg_footer_class); ?> <?php echo esc_attr($hair_spa_salon_col_md_footer_class); ?>">
                    <?php dynamic_sidebar('footer-' . $i); ?>
                </div><!-- .footer-one-box -->
                <?php
            endif;
        endfor;
        ?>
    </aside>
</div>