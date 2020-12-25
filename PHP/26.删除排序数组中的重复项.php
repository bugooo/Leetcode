/*
 * @lc app=leetcode.cn id=26 lang=php
 *
 * [26] 删除排序数组中的重复项
 */

// @lc code=start
class Solution {

    /**
     * 遍历数组
     * 
     */
    function removeDuplicates(&$nums) {
        //[0,0,1,1,1,2,2,3,3,4]
        $len = count($nums);
        if($len < 2){
            return $len;
        }
        $i = 0;
        $j = 1;
        for($j;$j<$len;$j++){
            if($nums[$i] == $nums[$j]){
                unset($nums[$j]);
            }else{
                $i=$j;
            }
        }
        return count($nums);
    }
}
// @lc code=end

