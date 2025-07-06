<?php
require '../vendor/autoload.php';

use Latte\Engine;
use Tracy\Debugger;

Tracy\Debugger::enable();
Debugger::enable(Debugger::DEVELOPMENT);

$latte = new Engine;
$latte->setTempDirectory(__DIR__ . '/../temp');
$latte->setLoader(new Latte\Loaders\FileLoader(__DIR__ . '/views'));

return $latte;
