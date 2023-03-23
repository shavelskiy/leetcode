<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task567;
use PHPUnit\Framework\TestCase;

final class Task567Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param mixed $result
     */
    public function test567(string $s1, string $s2, $result): void
    {
        $sut = new Task567();

        self::assertSame($sut->checkInclusion($s1, $s2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abcdxabcde', 'abcdeabcdx', true],
            ['adc', 'dcda', true],
            ['ab', 'eidbaooo', true],
            ['ab', 'eidboaoo', false],
        ];
    }
}
