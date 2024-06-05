<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

/**
 * https://leetcode.com/problems/backspace-string-compare/
 * 91.18/94.12.
 */
final class Task844
{
    public function backspaceCompare(string $s, string $t): bool
    {
        return $this->parse($s) === $this->parse($t);
    }

    private function parse(string $s): string
    {
        $skip = 0;
        $result = '';
        for ($i = strlen($s) - 1; $i >= 0; --$i) {
            if ($s[$i] === '#') {
                ++$skip;
            } elseif ($skip > 0) {
                --$skip;
            } else {
                $result .= $s[$i];
            }
        }

        return $result;
    }
}
