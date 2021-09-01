<?php defined( 'ABSPATH' ) OR exit; ?>

<div data-stly-layout="caching">
  <h3 class="title"><?php _e( 'Caching', 'statically' ); ?></h3>

  <table class="form-table">
    <tr valign="top">
      <th scope="row">
        <?php _e( 'Purge Cache', 'statically' ); ?>
      </th>
      
      <td>
        <fieldset>
          <label for="statically_purge">
            <?php if ( !$options['statically_zone_id'] ) : ?>
              <p style="margin-bottom:20px">This feature is currently limited to sponsors only. For more details, please visit <a data-stly-tab="support-me" href="#support-me">Donate</a> tab.</p>
            <?php endif; ?>
            <a class="button button-primary <?php if ( !$options['statically_zone_id'] ) echo 'button-disabled'; ?>" id="btn-purge"><?php _e( 'Purge URL', 'statically' ); ?></a>
            <a class="button button-primary <?php if ( !$options['statically_zone_id'] ) echo 'button-disabled'; ?>" id="btn-purge-all"><?php _e( 'Purge All', 'statically' ); ?></a>
          </label>
        </fieldset>
      </td>
    </tr>
  </table>
</div>