<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task618Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test618(int $a, int $result): void
    {
        $sut = new Task618();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
