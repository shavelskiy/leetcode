<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task43Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test54(string $num1, string $num2, string $result): void
    {
        $sut = new Task43();

        self::assertSame($sut->multiply($num1, $num2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['9133', '0', '0'],
            ['9', '9', '81'],
            ['2', '3', '6'],
            ['123', '456', '56088'],
        ];
    }
}
