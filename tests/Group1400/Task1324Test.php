<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1324Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1324(int $a, int $result): void
    {
        $sut = new Task1324();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
