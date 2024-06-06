<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

/**
 * https://leetcode.com/problems/lemonade-change/
 * 55.56/44.44.
 */
final class Task860
{
    /**
     * @param int[] $bills
     */
    public function lemonadeChange(array $bills): bool
    {
        $five = 0;
        $ten = 0;

        foreach ($bills as $bill) {
            switch ($bill) {
                case 5:
                    $five++;
                    break;
                case 10:
                    $five--;
                    ++$ten;
                    break;
                case 20:
                    if ($ten > 0) {
                        --$ten;
                        --$five;
                    } else {
                        $five -= 3;
                    }
                    break;
            }

            if ($five < 0) {
                return false;
            }
        }

        return true;
    }
}
