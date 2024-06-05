<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

/**
 * https://leetcode.com/problems/goal-parser-interpretation/
 * 20.69/70.69.
 */
final class Task1678
{
    public function interpret(string $command): string
    {
        $n = strlen($command);

        $current = '';
        $result = '';
        for ($i = 0; $i < $n; ++$i) {
            switch ($command[$i]) {
                case 'G':
                    $result .= 'G';
                    break;
                case '(':
                    break;
                case ')':
                    $result .= empty($current) ? 'o' : $current;
                    $current = '';
                    break;
                default:
                    $current .= $command[$i];
            }
        }

        return $result;
    }
}
