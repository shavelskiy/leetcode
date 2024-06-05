<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

/**
 * https://leetcode.com/problems/decrypt-string-from-alphabet-to-integer-mapping/
 * 71.43/100.
 */
final class Task1309
{
    public function freqAlphabets(string $s): string
    {
        $result = '';

        for ($i = strlen($s) - 1; $i >= 0; --$i) {
            $char = $s[$i];
            if ($char === '#') {
                $result = chr((int)($s[$i - 2] . $s[$i - 1]) + 96) . $result;
                $i -= 2;
            } else {
                $result = chr((int)$char + 96) . $result;
            }
        }

        return $result;
    }
}
