<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group800\Task784;
use PHPUnit\Framework\TestCase;

final class Task784Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test784(string $s, array $result): void
    {
        $sut = new Task784();

        self::assertSame($sut->letterCasePermutation($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['C', ['C', 'c']],
            ['a1b2', ['a1b2', 'a1B2', 'A1b2', 'A1B2']],
            ['3z4', ['3z4', '3Z4']],
        ];
    }
}
