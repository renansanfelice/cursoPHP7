<?php

// namespace
use Rain\Tpl;

require_once("vendor/autoload.php");

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",

);
Tpl::configure( $config );
// Add PathReplace plugin (necessary to load the CSS with path replace)
Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
// create the Tpl object
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Emporium Digital" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$tpl->draw( "index" );
 ?>
