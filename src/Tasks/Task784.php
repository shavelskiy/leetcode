<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/letter-case-permutation/
 * 55.56/44.44.
 */
final class Task784
{
    /**
     * @return string[]
     */
    public function letterCasePermutation(string $s, int $start = 0): array
    {
        $n = strlen($s);
        $result = [];

        for ($i = $start; $i < $n; ++$i) {
            if ($i === $n - 1) {
                $result[] = $s;
            }

            if (ord($s[$i]) < 65) {
                continue;
            }

            $result = array_merge($result, $this->letterCasePermutation($s, $i + 1));
            $this->toggle($s, $i);

            if ($i === $n - 1) {
                $result[] = $s;
            }
            $result = array_merge($result, $this->letterCasePermutation($s, $i + 1));
            break;
        }

        return $result;
    }

    private function toggle(string &$s, int $i): void
    {
        $ord = ord($s[$i]);
        $s[$i] = $ord < 97 ? chr($ord + 32) : chr($ord - 32);
    }
}
