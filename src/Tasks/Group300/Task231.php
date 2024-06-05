<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * https://leetcode.com/problems/power-of-two/
 * 29.58/5.63.
 */
final class Task231
{
    public function isPowerOfTwo(int $n): bool
    {
        return preg_match('/^1[0]*$/', decbin($n)) === 1;
    }
}
