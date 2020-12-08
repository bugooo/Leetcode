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
        $l = 0;
        $r = $len - 1;
        while($l<$r){
            //
            $area = min($height[$l],$height[$r])*($r-$l);
            $max = max($max,$area);
            if($height[$l]<$height[$r]){
                $l++;
            }else{
                $r--;
            }
        }
        return $max;
    }
}
// @lc code=end

