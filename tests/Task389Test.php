<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group400\Task389;
use PHPUnit\Framework\TestCase;

final class Task389Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test389(string $s, string $t, string $result): void
    {
        $sut = new Task389();

        self::assertSame($sut->findTheDifference($s, $t), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abcd', 'abcde', 'e'],
            ['', 'y', 'y'],
        ];
    }
}
