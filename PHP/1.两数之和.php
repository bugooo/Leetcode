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
        for($i=0;$i<count($nums);$i++){
            $nums2 = $target-$nums[$i];
            if(in_array($nums2,$nums)){
                $key = array_search($nums2,$nums);
                if($key!=$i){
                    $result= [$i,$key];
                    break;
                }
            }
        }
        return $result;
    }
        
    
}
// @lc code=end

