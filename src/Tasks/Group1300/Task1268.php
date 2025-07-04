<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

/**
 * https://leetcode.com/problems/search-suggestions-system.
 * 100/100.
 */
final class Task1268
{
    /**
     * @param string[] $products
     *
     * @return array<string[]>
     */
    public function suggestedProducts(array $products, string $searchWord): array
    {
        $result = [];
        sort($products);

        for ($i = 0; $i < strlen($searchWord); ++$i) {
            $current = [];
            foreach ($products as $word) {
                if ($word[$i] === $searchWord[$i]) {
                    $current[] = $word;
                }
            }

            $result[] = count($current) > 3 ? array_slice($current, 0, 3) : $current;
            $products = $current;
        }

        return $result;
    }
}
