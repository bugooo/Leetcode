/*
 * @lc app=leetcode.cn id=15 lang=php
 *
 * [15] 三数之和
 */

// @lc code=start
class Solution {

    /**
     * 排序+双指针
     * 
     */
    function threeSum($nums) {
        $len = count($nums);
        if($len<3){
            return [];
        }
        $nums = array_value(arsort($nums));
        $l=1;
        $r=$len-1;
        $result=[];
        for($i=0;$i<$len;$i++){
            $target = $nums[$i];
            while($l<$r){
                if($nums[$l]+$nums[$r]+$target>0){
                    $r--;
                }elseif($nums[$l]+$nums[$r]+$target<0){
                    $l++
                }else{
                    $result[]=[$target,$num[$l],$nums[$r]];
                    break;
                }
            }
        }

    }
}
// @lc code=end

