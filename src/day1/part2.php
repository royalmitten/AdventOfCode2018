<?php

declare(strict_types=1);

require_once 'src/Util.php';

$startTime = microtime(true);
$result = 0;
$pastResults = [];

while ($searching ?? true) {
    foreach (Util::getInput('day1/input.txt') as $freq) {
        $result += (int) $freq;

        if (in_array($result, $pastResults)) {
            $searching = false;
            break;
        }

        $pastResults[] = $result;
    };
}

Util::printResult($result, $startTime);
