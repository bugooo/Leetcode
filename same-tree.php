<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        if ($p == null && $q == null) return true;
        if ($q == null || $p == null) return false;
        if ($p->val != $q->val) return false;
        return self::isSameTree($p->right, $q->right) && self::isSameTree($p->left, $q->left);
    }

}