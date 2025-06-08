<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task95Test extends TestCase
{
    public function test95(): void
    {
        $sut = new Task95();

        self::assertSame(count($sut->generateTrees(3)), 5);
    }
}
