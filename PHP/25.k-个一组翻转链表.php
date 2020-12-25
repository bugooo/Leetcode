/*
 * @lc app=leetcode.cn id=25 lang=php
 *
 * [25] K 个一组翻转链表
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
     * 递归
     * 终止条件：剩余节点数小于k
     * 递归条件 反转当前k个结点链表
     * 返回值 返回反转的链表
     */
    function reverseKGroup($head, $k) {
        $curr = $head;
        $count = 0;
        while ($curr != null && $count != k) { // find the k+1 node
            $curr = $curr.next;
            $count++;
        }
        if ($count == k) { // if k+1 node is found
            $curr = reverseKGroup($curr, $k); // reverse list with k+1 node as head
            // head - head-pointer to direct part, 
            // curr - head-pointer to reversed part;
            while ($count-- > 0) { // reverse current k-group: 
                $tmp = $head->next; // tmp - next head in direct part
                $head->next = $curr; // preappending "direct" head to the reversed list 
                $curr = $head; // move head of reversed part to a new node
                $head = $tmp; // move "direct" head to the next node in direct part
            }
            $head = $curr;
        }
        return $head;  
    }
}
// @lc code=end

