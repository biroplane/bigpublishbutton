<?php

/**
 * Plugin Name: Big Publish Button
 * Description: Create a butto to deploy websites
 * Version: 1.1.3
 * Author: Biro
 * Author URI: https://github.com/biroplane
 */


require_once( 'BigButtonUpdater.php' );
if ( is_admin() ) {
    new BigButtonUpdater( __FILE__, 'biroplane', "bigpublishbutton" );
}

