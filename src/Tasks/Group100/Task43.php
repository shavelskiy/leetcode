<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/multiply-strings/description/
 * 14.29/50.00.
 */
final class Task43
{
    public function multiply(string $num1, string $num2): string
    {
        $parts = [];
        $maxLength = 0;

        $offset = '';
        for ($i = strlen($num2) - 1; $i >= 0; --$i) {
            $temp = $offset;
            $transfer = 0;
            for ($j = strlen($num1) - 1; $j >= 0; --$j) {
                $v = ((int)$num2[$i] * (int)$num1[$j]) + $transfer;
                $transfer = intdiv($v, 10);
                $temp .= $v % 10;
            }

            $temp .= $transfer;

            $parts[] = $temp;

            if (strlen($temp) > $maxLength) {
                $maxLength = strlen($temp);
            }

            $offset .= '0';
        }

        $tempResult = '';
        $v = 0;
        for ($i = 0; $i < $maxLength; ++$i) {
            foreach ($parts as $part) {
                $v += (int)($part[$i] ?? '0');
            }

            $tempResult .= $v % 10;
            $v = intdiv($v, 10);
        }

        $tempResult .= $v;

        $result = '';
        for ($i = strlen($tempResult) - 1; $i >= 0; --$i) {
            if ($tempResult[$i] === '0' && empty($result)) {
                continue;
            }

            $result .= $tempResult[$i];
        }

        return empty($result) ? '0' : $result;
    }
}
