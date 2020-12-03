/*
 * @lc app=leetcode.cn id=11 lang=php
 *
 * [11] 盛最多水的容器
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        //[1,8,6,2,5,4,8,3,7]
        $len = count($height);
        if($len < 2){
            return 0;
        }
        $max = 0;
        $i = 0;
        $j = $len - 1;
        while($i<$j){
            //
            $area = min($height[$i],$height[$j])*($j-$i);
            $max = max($max,$area);
            if($height[$i]<$height[$i+1]){
                $i++;
            }
            if($height[$j-1]>$height[$j]){
                $j--;
            }
        }
    }
}
// @lc code=end

