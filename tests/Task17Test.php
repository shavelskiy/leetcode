<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task17;
use PHPUnit\Framework\TestCase;

final class Task17Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param string[] $result
     */
    public function test17(string $digits, array $result): void
    {
        $sut = new Task17();

        $data = $sut->letterCombinations($digits);
        sort($data);
        sort($result);
        self::assertSame($data, $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['23', ['ad', 'ae', 'af', 'bd', 'be', 'bf', 'cd', 'ce', 'cf']],
            ['', []],
            ['2', ['a', 'b', 'c']],
        ];
    }
}
