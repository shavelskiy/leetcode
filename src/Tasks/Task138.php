<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\Node;

/**
 * https://leetcode.com/problems/copy-list-with-random-pointer/
 * bug with submit
 */
final class Task138
{
    public function copyRandomList(Node $head): Node
    {
        $map = [];
        return $this->getNode($head, $map);
    }

    /**
     * @param Node[] $map
     */
    private function getNode(Node $head, array &$map): Node
    {
        $hash = spl_object_id($head);
        if (!isset($map[$hash])) {
            $tmp = new Node($head->val);
            $map[$hash] = $tmp;

            $tmp->next = $head->next !== null ? $this->getNode($head->next, $map) : null;
            $tmp->random = $head->random !== null ? $this->getNode($head->random, $map) : null;
        }

        return $map[$hash];
    }
}
