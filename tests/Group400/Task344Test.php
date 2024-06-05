<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use App\Tasks\Group400\Task344;
use PHPUnit\Framework\TestCase;

final class Task344Test extends TestCase
{
    public function test344(): void
    {
        $sut = new Task344();

        $data = ['h', 'e', 'l', 'l', 'o'];
        $sut->reverseString($data);

        self::assertSame($data, ['o', 'l', 'l', 'e', 'h']);

        $data = ['H', 'a', 'n', 'n', 'a', 'h'];
        $sut->reverseString($data);

        self::assertSame($data, ['h', 'a', 'n', 'n', 'a', 'H']);
    }
}
