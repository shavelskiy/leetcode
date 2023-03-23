<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/longest-valid-parentheses/.
 * 80/80.
 */
final class Task32
{
    public function longestValidParentheses(string $s): int
    {
        $result = 0;

        $count = 0;
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === '(') {
                $count++;
                $stack[] = false;
                continue;
            }

            if ($count < 1) {
                if (($max = $this->findMax($stack)) > $result) {
                    $result = $max;
                }
                $count = 0;
                $stack = [];
                continue;
            }
            $count--;

            for ($j = count($stack) - 1; $j >= 0; $j--) {
                if ($stack[$j] === false) {
                    $stack[$j] = true;
                    break;
                }
            }
        }

        return max($result, $this->findMax($stack)) * 2;
    }

    /**
     * @param bool[] $stack
     */
    private function findMax(array $stack): int
    {
        $max = 0;
        $current = 0;
        foreach ($stack as $item) {
            if ($item === true) {
                $current++;
                continue;
            }

            if ($current > $max) {
                $max = $current;
            }
            $current = 0;
        }

        return max($max, $current);
    }
}
