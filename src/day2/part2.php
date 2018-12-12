<?php

declare(strict_types=1);

require_once 'src/Util.php';

$startTime = microtime(true);
$input = Util::getInput('day2/input.txt');

foreach ($input as $boxId) {
    foreach ($input as $boxIdCompared) {
        if (strlen($boxIdCompared) - 1 === similar_text($boxId, $boxIdCompared)) {
            $result = str_split($boxIdCompared);

            array_walk(str_split($boxId), function($char, $key) use (&$result) {
                if ($char !== $result[$key]) {
                    unset($result[$key]);
                }
            });

            $result = implode($result);

            break 2;
        }
    }
}

Util::printResult($result ?? 'No result found!', $startTime);
