<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use PHPUnit\Framework\TestCase;

final class Task726Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test726(int $a, int $result): void
    {
        $sut = new Task726();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
