/*
 * @lc app=leetcode.cn id=206 lang=php
 *
 * [206] 反转链表
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
    function reverseList($head) {
        $prev = null;
        $cur = $head;
        while($cur!=null){
            $tmp = $cur->next;
            $cur->next = $prev;
            $prev = $cur;
            $cur = $tmp;
        }
        return $prev;
    }
}
// @lc code=end

