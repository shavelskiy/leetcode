<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use App\Tasks\Group700\Task657;
use PHPUnit\Framework\TestCase;

final class Task657Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test657(string $moves, bool $result): void
    {
        $sut = new Task657();

        self::assertSame($sut->judgeCircle($moves), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['UD', true],
            ['LL', false],
            ['RLUURDDDLU', true],
        ];
    }
}
