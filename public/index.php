<?php
require "../vendor/autoload.php";
require "../TraitBlade.php";
require "../router.php";
require "../variables.php";

use eftec\bladeone\BladeOne;

class ExtendedBlade extends BladeOne {
    use TraitBlade;
}

// Running blade
$views = __DIR__ . '/../src/views';
$cache = __DIR__ . '/cache';

$blade = new ExtendedBlade($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.

echo $blade->run($page, $variables);
