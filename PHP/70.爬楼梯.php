/*
 * @lc app=leetcode.cn id=70 lang=php
 *
 * [70] 爬楼梯
 */

// @lc code=start
class Solution {
    public $num;
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if($n < 3){
            return $n;
        }
        $num[1] = 1;
        $num[2] = 2;
        for($i = 3;$i<=$n;$i++){
            $num[$i] = $num[$i-1] + $num[$i-2];
        }
        return $num[$n];
    }
}
// @lc code=end

