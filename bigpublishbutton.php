<?php
require_once( 'BigButtonUpdater.php' );
if ( is_admin() ) {
    new BigButtonUpdater( __FILE__, 'biroplane', "bigpublishbutton" );
}