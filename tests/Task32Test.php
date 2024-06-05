<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task32;
use PHPUnit\Framework\TestCase;

final class Task32Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test32(string $s, int $result): void
    {
        $sut = new Task32();

        self::assertSame($sut->longestValidParentheses($s), $result);
    }

    public static function dataProvider(): array
    {
        $data = require __DIR__ . '/../data/task-32.php';

        return [
            [$data, 2684],
            ['(()(()(()', 2],
            ['()(()', 2],
            ['(()', 2],
            [')()())', 4],
            ['', 0],
        ];
    }
}
