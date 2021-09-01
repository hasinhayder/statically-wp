<?php defined( 'ABSPATH' ) OR exit; ?>

<div data-stly-layout="support-me">
    <section class="support-me">
        <img class="logo" src="<?php echo plugin_dir_url( STATICALLY_FILE ) . 'static/statically-mark.svg'; ?>" alt="Statically Logo">
        <h3 class="title">
          <?php _e( '$5 &#8212; that\'s all to keep Statically free', 'statically' ); ?>
        </h3>
        <p class="description">
          <?php _e( 'Hi, I\'m Frans Allen, the creator of Statically. Building a premium free service takes a <strong>lot</strong> of <strong>time</strong> and <strong>effort</strong>. Kindly consider supporting me by monthly donation on Patreon because it will help me cover development and server expenses. Thank you :)', 'statically' ); ?>
        </p>
        <a class="button button-primary" href="https://www.patreon.com/fransallen" target="_blank">
          <?php _e( 'Monthly via Patreon', 'statically' ); ?>
        </a>
    </section>
</div>