<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

/**
 * https://leetcode.com/problems/determine-if-two-strings-are-close/.
 * 53.33/80.00.
 */
final class Task1657
{
    public function closeStrings(string $word1, string $word2): bool
    {
        [$hash1, $countHash1] = $this->getHash($word1);
        [$hash2, $countHash2] = $this->getHash($word2);

        if (count($hash1) !== count($hash2)) {
            return false;
        }

        foreach (array_keys($hash1) as $char) {
            if (!isset($hash2[$char])) {
                return false;
            }
        }

        foreach (array_keys($countHash1) as $count) {
            if (!isset($countHash2[$count])) {
                return false;
            }

            if ($countHash1[$count] > $countHash2[$count]) {
                $countHash1[$count] -= $countHash2[$count];
                unset($countHash2[$count]);
            } elseif ($countHash2[$count] > $countHash1[$count]) {
                $countHash2[$count] -= $countHash1[$count];
                unset($countHash1[$count]);
            } else {
                unset($countHash1[$count], $countHash2[$count]);
            }
        }

        return empty($countHash1) && empty($countHash2);
    }

    private function getHash(string $word): array
    {
        $result = [];

        for ($i = strlen($word) - 1; $i >= 0; --$i) {
            $char = $word[$i];
            if (!isset($result[$char])) {
                $result[$char] = 0;
            }

            ++$result[$char];
        }

        $countResult = [];
        foreach ($result as $count) {
            if (!isset($countResult[$count])) {
                $countResult[$count] = 0;
            }

            ++$countResult[$count];
        }

        return [$result, $countResult];
    }
}
