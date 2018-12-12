<?php

declare(strict_types=1);

require_once 'src/Util.php';

$startTime = microtime(true);
$counterX2 = 0;
$counterX3 = 0;

foreach (Util::getInput('day2/input.txt') as $boxId) {
    $found2 = false;
    $found3 = false;

    foreach (str_split($boxId) as $char) {
        switch ($count = substr_count($boxId, $char)) {
            case 2:
            case 3:
                if (!${"found$count"}) {
                    ${"found$count"} = true;
                    ${"counterX$count"} ++;
                }
                break;
        }
    }
}

Util::printResult($counterX2 * $counterX3, $startTime);
