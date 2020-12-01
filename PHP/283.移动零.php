/*
 * @lc app=leetcode.cn id=283 lang=php
 *
 * [283] 移动零
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        /**
         * 双指针法 $j指向0 的位置当$i的位置上的值不等于零时，交换两个位置的值
         * 时间复杂度 O(N)
         */
        $len = count($nums);
        if($len < 2){
            return $nums;
        }
        $j = 0;
        for($i=0;$i<$len;$i++){
            if($nums[$i] == 0){
                continue;
            }
            if($nums[$j] == 0){
                $nums[$j] = $nums[$i];
                $nums[$i] = 0; 
            }
            $j++;
        }
        return $nums;
    }
    function moveZeroes2(&$nums) {
        /**
         * 遍历数组，将不为零的元素从index=0的位置开始放置直到所有不为零的元素放完后补充零
         * 时间复杂度 O(N)
         */
        $len = count($nums);
        if($len < 2){
            return $nums;
        }
        $index = 0;
        for($i=0;$i<$len;$i++){
            if($nums[$i]!=0){
                $nums[$index] = $nums[$i];
                $index++;
            }
        }
        if($index < $len){
            for($index;$index < $len;$index++){
                $nums[$index] = 0;
            }
        }
        return $nums;
    }
}
// @lc code=end

