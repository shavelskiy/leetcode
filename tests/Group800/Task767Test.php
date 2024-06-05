<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use PHPUnit\Framework\TestCase;

final class Task767Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test767(int $a, int $result): void
    {
        $sut = new Task767();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
