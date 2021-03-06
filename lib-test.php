<?php

// Composer auto-loads
$loader = require 'vendor/autoload.php';

// https://getcomposer.org/doc/01-basic-usage.md#autoloading
$loader->add('app\\', __DIR__);

$lib = new app\ApplicationLibrary();
$foo = $lib->foo();
$bar = $foo->bar();

use Underscore\Types\Arrays;
Arrays::each($bar, function($value) {
  echo $value."\n";
});
