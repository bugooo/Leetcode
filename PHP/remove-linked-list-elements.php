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

    /**不用虚拟头结点
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        while($head!=null && $head->val==$val){
            $head = $head->next;
        }
        if($head == null){
            return null;
        }
        $prev = $head;
        while($prev->next!=null){
            if($prev->next->val == $val){
                $delNode = $prev->next;
                $prev->next = $delNode->next;
                $delNode = null;
            }else{
                $prev = $prev->next;
            }
        }
        return $head;
    }
    /**使用虚拟头结点
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements2($head, $val) {
        $dummyHead = new ListNode(-1);
        $dummyHead->next = $head;
        $prev = $dummyHead;
        while($prev->next!=null){
            if($prev->next->val == $val){
                $delNode = $prev->next;
                $prev->next = $delNode->next;
                $delNode = null;
            }else{
                $prev = $prev->next;
            }
        }
        return $dummyHead->next;
    }
    /**使用递归
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements3($head, $val) {
        if($head == null){
            return null;
        }
        $head->next = $this->removeElements3($head->next,$val);
        return $head->val == $val?$head->next:$head;
    }
}