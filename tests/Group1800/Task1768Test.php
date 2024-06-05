<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use App\Tasks\Group1800\Task1768;
use PHPUnit\Framework\TestCase;

final class Task1768Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1768(string $word1, string $word2, string $result): void
    {
        $sut = new Task1768();

        self::assertSame($sut->mergeAlternately($word1, $word2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abc', 'pqr', 'apbqcr'],
            ['ab', 'pqrs', 'apbqrs'],
            ['abcd', 'pq', 'apbqcd'],
        ];
    }
}
