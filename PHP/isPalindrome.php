<?php
class Solution {

    /** 题目描述：判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。
     * 链接：https://leetcode-cn.com/problems/palindrome-number/
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return $x == strrev($x);
    }
}