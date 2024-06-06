<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * https://leetcode.com/problems/reverse-words-in-a-string/.
 * 9.86, 79.34.
 */
final class Task151
{
    public function reverseWords(string $s): string
    {
        $result = '';

        $word = '';
        for ($i = 0; $i < strlen($s); ++$i) {
            if ($s[$i] === ' ') {
                if ($word !== '') {
                    $result = sprintf('%s%s%s', $word, $result !== '' ? ' ' : '', $result);
                    $word = '';
                }

                continue;
            }

            $word .= $s[$i];
        }

        if ($word !== '') {
            $result = sprintf('%s%s%s', $word, $result !== '' ? ' ' : '', $result);
        }

        return $result;
    }
}
