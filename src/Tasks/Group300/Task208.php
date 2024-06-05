<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * https://leetcode.com/problems/implement-trie-prefix-tree/
 * 17.86/88.10.
 */
final class Task208
{
    /** @var string[] */
    private array $words = [];

    public function insert(string $word): void
    {
        $this->words[] = $word;
    }

    public function search(string $word): bool
    {
        return in_array($word, $this->words, true);
    }

    public function startsWith(string $prefix): bool
    {
        foreach ($this->words as $word) {
            if (str_starts_with($word, $prefix)) {
                return true;
            }
        }

        return false;
    }
}
