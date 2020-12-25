/*
 * @lc app=leetcode.cn id=142 lang=php
 *
 * [142] 环形链表 II
 */

// @lc code=start
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
    [-21,10,17,8,4,26,5,35,33,-7,-16,27,-12,6,29,-12,5,9,20,14,14,2,13,-24,21,23,-21,5]
24
    function detectCycle($head) {
        $slow = $head;
        $fast = $head;
        while($fast->next!=null || $fast->next->next!=null){
            $slow = $slow->next;
            $fast = $fast->next->next;
            if($slow == $fast){
                while($fast!=$head){
                    $head = $head->next;
                    $fast = $fast->next;
                }
                return $head;
            }
            
        }
        return null;
    }
}
// @lc code=end

