/*
 * @lc app=leetcode.cn id=24 lang=php
 *
 * [24] 两两交换链表中的节点
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * 迭代
     * 
     */
    function swapPairs($head) {
        $dummyHead = new ListNode(0);
        $dummyHead->next = $head;
        $tmp = $dummyHead;
        while($tmp->next!=null && $tmp->next->next!=null){
            $node2 = $tmp->next->next;
            $node1 = $tmp->next;
            $tmp->next = $node2;
            $node1->next = $node2->next;
            $node2->next = $node1;
            $tmp = $node1;
        
        }
        return $dummyHead->next;
    }

    /**
     * 递归
     * 
     */
    function swapPairs($head) {
       if($head == null || $head->next == null){
           return $head;
       }
       $next = $head->next;
       $head->next = self::swapPairs($next->next); 
       $next->next = $head;
       return $next; 
    }
}
// @lc code=end

