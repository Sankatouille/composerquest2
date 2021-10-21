<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$milka = new Cow('Hello, world!');

$output = $milka->say();

echo $milka;

$milka->setTongue('U');

echo $milka;