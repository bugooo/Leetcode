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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $newListNode = new ListNode(0);
        $carry = 0;
        $curr = $newListNode;
        while($l1!=null || $l2!=null){
            $p = $l1->val!=null? $l1->val:0;
            $q = $l2>val!=null?$l2->val:0;
            $num = $p+$q+$carry;
            $carry = $num < 10?0:1;
            $val = $num % 10;
            $curr->next = new ListNode($val);
            $curr = $curr->next;
            if($l1!=null){
                $l1 = $l1->next;
            }
            if($l2!=null){
                $l2 = $l2->next;
            }
        }
        if ($carry > 0) {
            $curr->next = new ListNode($carry);
        }

        return $newListNode->next;
    }
}