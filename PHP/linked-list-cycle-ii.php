<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    //遍历节点存到数组中，如果在数组中存在，则说明有环，入口节点就是该节点
    //时间复杂度 O(N)
    //空间复杂度O(N)
    function detectCycle($head) {
        $arr = [];
        $i=0;
        while(!array_key_exists($head->value) && $head->next!=null){
            $head=$head->next;
            $arr[$head->value]=$i;
            $i++;
        }
        return $i;
    }
}