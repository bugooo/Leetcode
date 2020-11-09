/*
 * @lc app=leetcode.cn id=125 lang=php
 *
 * [125] 验证回文串
 */

// @lc code=start
class Solution {

    /**
     * 字符串反转
     * 时间复杂度 O(n)
     * 空间复杂度 O(n)
     */
    function isPalindrome($s) {
        //只考虑字母和数字字符
        $s = preg_replace('/[^0-9A-Za-z]/',"",$s);//\W|_
        //大小写忽略
        $s = strtolower($s);
        //字符串翻转
        $news = strrev($s);
        //字符串比较
        if($s==$news){
            return true;
        }
        return false;
    }
    /**
     * 双指针
     * 时间复杂度 O(n)
     * 空间复杂度 O(1)
     */
    function isPalindrome2($s) {
        $i=0;
        $j=strlen($s)-1;
        while($i<$j){
            //非字母和数字则$i+1 
            if(!ctype_alnum($s[$i])){
                $i++;
                continue;
            }
            //非字母和数字则$j-1 
            if(!ctype_alnum($s[$j])){
                $j--;
                continue;
            }
            if(strtolower($s[$i]) != strtolower($s[$j])){
                return false;
            }
            $i++;
            $j--;
        }
        return true;
    }
}
// @lc code=end

