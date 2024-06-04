<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1041;
use PHPUnit\Framework\TestCase;

final class Task1041Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1041(string $instructions, bool $result): void
    {
        $sut = new Task1041();

        self::assertSame($sut->isRobotBounded($instructions), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['GGLLGG', true],
            ['GG', false],
            ['GL', true],
        ];
    }
}
