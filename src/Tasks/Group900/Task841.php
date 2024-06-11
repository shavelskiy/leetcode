<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

/**
 * https://leetcode.com/problems/keys-and-rooms/.
 * 70.83/45.83.
 */
final class Task841
{
    /**
     * @param array<int[]> $rooms
     */
    public function canVisitAllRooms(array $rooms): bool
    {
        $result = array_fill(0, count($rooms), false);

        $keys = [0];

        while (!empty($keys)) {
            $key = array_shift($keys);

            $result[$key] = true;

            foreach ($rooms[$key] as $item) {
                if (!$result[$item]) {
                    $keys[] = $item;
                }
            }
        }

        foreach ($result as $room) {
            if (!$room) {
                return false;
            }
        }

        return true;
    }
}
