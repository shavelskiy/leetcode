<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group800\Task709;
use PHPUnit\Framework\TestCase;

final class Task709Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test709(string $s, string $result): void
    {
        $sut = new Task709();

        self::assertSame($sut->toLowerCase($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['Hello', 'hello'],
            ['here', 'here'],
            ['LOVELY', 'lovely'],
        ];
    }
}
