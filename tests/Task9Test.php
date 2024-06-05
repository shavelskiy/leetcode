<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task9;
use PHPUnit\Framework\TestCase;

final class Task9Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test9(int $x, bool $result): void
    {
        $sut = new Task9();

        self::assertSame($sut->isPalindrome($x), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [121, true],
            [-121, false],
            [10, false],
        ];
    }
}
