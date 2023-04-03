<?php

declare(strict_types=1);

namespace App\Model;

use SplHeap;

final class Heap1046 extends SplHeap
{
    public function compare(mixed $val1, mixed $val2): int
    {
        return $val1 > $val2 ? 1 : -1;
    }
}
