<?php

declare(strict_types=1);

namespace App\Model;

use SplHeap;

final class Heap1337 extends SplHeap
{
    public function compare(mixed $val1, mixed $val2): int
    {
        return ($val1[1] > $val2[1]) || ($val1[1] === $val2[1] && $val1[0] > $val2[0]) ? 1 : -1;
    }
}
