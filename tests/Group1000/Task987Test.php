<?php

declare(strict_types=1);

namespace App\Tasks\Group1000;

use PHPUnit\Framework\TestCase;

final class Task987Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test987(int $a, int $result): void
    {
        $sut = new Task987();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
