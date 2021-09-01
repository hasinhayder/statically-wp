<?php

defined( 'ABSPATH' ) OR exit;

$options = Statically::get_options();

?>

<section class="stly-plugin-container">
    <div class="stly stly-options wrap">
        <h2 style="display:none"><?php _e( 'Statically', 'statically' ); ?></h2>

        <?php if ( Statically::admin_pagenow( 'statically' ) ) : ?>

            <form method="post" action="options.php">
            <?php
            settings_fields( 'statically' );

            include STATICALLY_DIR . '/views/options-general.php';
            
            if ( Statically::is_custom_domain() )
                include STATICALLY_DIR . '/views/options-analytics.php';

            include STATICALLY_DIR . '/views/options-speed.php';
            include STATICALLY_DIR . '/views/options-extra.php';
            include STATICALLY_DIR . '/views/options-caching.php';
            include STATICALLY_DIR . '/views/options-labs.php';
            include STATICALLY_DIR . '/views/options-tools.php';
            include STATICALLY_DIR . '/views/options-sponsor.php';

            ?>
            </form>

            <?php

            if ( $options['statically_zone_id'] )
                include STATICALLY_DIR . '/views/dialog-caching.php';
        
        endif;
        ?>
    </div>
</section>