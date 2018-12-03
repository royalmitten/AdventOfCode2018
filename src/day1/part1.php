<?php

declare(strict_types=1);

require_once 'src/Util.php';

$startTime = microtime(true);

Util::printResult(array_sum(Util::getInput('day1/input.txt')), $startTime);
