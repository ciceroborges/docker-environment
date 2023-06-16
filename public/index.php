<?php 

require_once "../vendor/autoload.php";

$style  = "display: flex;";
$style .= "justify-content: center;";
$style .= "align-items: center;";
$style .= "height: 100vh;";
$style .= "margin: 0;";

$hash = (new Hashids\Hashids('salt', 11))->encode(time());

echo "<h1 style='{$style}'>{$hash}<h1>";