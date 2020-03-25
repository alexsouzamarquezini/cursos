<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

$config = array(
    "tpl_dir"   => "tpl/",
    "cache_dir" => "cache/",
    "debug"     => true,
);

Tpl::configure($config);
$tpl = new Tpl;
$tpl->assign("name", "Obi Wan Kenoby");
$tpl->assign("version", PHP_VERSION);
//$tpl->assign("week", array("Segunda", "Terça"));
$tpl->draw("index");

?>