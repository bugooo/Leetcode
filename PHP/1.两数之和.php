/*
 * @lc app=leetcode.cn id=1 lang=php
 *
 * [1] 两数之和
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        //时间复杂度O（n）空间复杂度O（n）
        $result = [];
        $newNums = array_flip($nums);
        for($i=0;$i<count($nums);$i++){
            $nums2 = $target-$nums[$i];
            if(isset($newNums[$nums2]) && $newNums[$nums2] != $i){
                $result= [$i,$newNums[$nums2]];   
            }
        }
        return $result;
    }
        
    
}
// @lc code=end

