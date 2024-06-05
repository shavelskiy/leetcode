<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task692Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test692(array $words, int $k, array $result): void
    {
        $sut = new Task692();

        self::assertSame($sut->topKFrequent($words, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [['i', 'love', 'leetcode', 'i', 'love', 'coding'], 2, ['i', 'love']],
            [['the', 'day', 'is', 'sunny', 'the', 'the', 'the', 'sunny', 'is', 'is'], 4, ['the', 'is', 'sunny', 'day']],
        ];
    }
}
