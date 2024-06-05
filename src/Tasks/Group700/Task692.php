<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use App\Model\Heap692 as Heap;

/**
 * https://leetcode.com/problems/top-k-frequent-words/
 * 91.30/65.22.
 */
final class Task692
{
    /**
     * @param string[] $words
     *
     * @return string[]
     */
    public function topKFrequent(array $words, int $k): array
    {
        $map = [];
        foreach ($words as $word) {
            $map[$word] = ($map[$word] ?? 0) + 1;
        }

        $heap = new Heap();
        foreach ($map as $word => $count) {
            $heap->insert([$word, $count]);

            if ($heap->count() > $k) {
                $heap->extract();
            }
        }

        $result = [];
        while ($heap->count() > 0) {
            $result[] = $heap->extract()[0];
        }

        return array_reverse($result);
    }
}
