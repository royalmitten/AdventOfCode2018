<?php

declare(strict_types=1);

class Util
{
    public static function getInput(string $path, string $explodeOn = PHP_EOL): array
    {
        return explode($explodeOn, file_get_contents($path, true));
    }

    public static function printResult($result, float $startTime): void
    {
        print("Result: $result" . PHP_EOL . 'Execution time: ' . round((microtime(true) - $startTime), 4) . 's' . PHP_EOL);
    }
}
