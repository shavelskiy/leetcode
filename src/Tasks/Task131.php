<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/palindrome-partitioning/submissions/919505717/
 * 65.52/20.69.
 */
final class Task131
{
    /**
     * @return array<string[]>
     */
    public function partition(string $s): array
    {
        return $this->process($s);
    }

    /**
     * @return array<string[]>
     */
    private function process(string $s): array
    {
        $result = [];

        for ($i = 1; $i <= strlen($s); $i++) {
            foreach ($this->find($s, $i) as $tmp) {
                $result[] = $tmp;
            }
        }

        return $result;
    }

    /**
     * @return array<string[]>
     */
    private function find(string $s, int $i): array
    {
        if (empty($s)) {
            return [];
        }

        $substring = substr($s, 0, $i);

        if (!$this->isPolindrom($substring)) {
            return [];
        }

        $next = substr($s, $i, strlen($s) - $i);
        $result = [];

        if (empty($next)) {
            return [[$substring]];
        }

        foreach ($this->process($next) as $group) {
            $result[] = [$substring, ...$group];
        }

        return $result;
    }

    private function isPolindrom(string $s): bool
    {
        while (($len = strlen($s)) > 1) {
            if ($s[0] !== $s[$len - 1]) {
                return false;
            }

            $s = substr($s, 1, $len - 2);
        }

        return true;
    }
}
