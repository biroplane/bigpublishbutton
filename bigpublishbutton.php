<?php
$data = array();
$packages = json_decode(file_get_contents('./package.json'));
$version = $packages['version'];
/**
 * Plugin Name: Big Publish Button
 * Description: Create a butto to deploy websites
 * Version: 1.0.0
 * Author: Biro
 * Author URI: https://github.com/biroplane
 */


require_once( 'BigButtonUpdater.php' );
if ( is_admin() ) {
    new BigButtonUpdater( __FILE__, 'biroplane', "bigpublishbutton" );
}

