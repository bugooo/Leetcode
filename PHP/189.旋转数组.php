/*
 * @lc app=leetcode.cn id=189 lang=php
 *
 * [189] 旋转数组
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
       $len  = count($nums);
       $k = $k % $len;
       $count = 0;         // 记录交换位置的次数，n个同学一共需要换n次
        for($start = 0; $count < $len; $start++) {
            $cur = $start;       // 从0位置开始换位子
            $pre = $nums[$cur];   
            do{
                $next = ($cur + $k) % $len;
                $temp = $nums[$next];    // 来到角落...
                $nums[$next] = $pre;
                $pre = $temp;
                $cur = $next;
                $count++;
            }while($start != $cur)  ;     // 循环暂停，回到起始位置，角落无人
             
        }

    }
}
// @lc code=end

