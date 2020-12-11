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
        $res = [];
        if($len<3){
            return $res;
        }
        asort($nums);
        $nums = array_values($nums);
        for($k=0;$k<=$len-3;$k++){
            //排除最小值>=0
            if($nums[$k]>0){
                return $res;
            }
            //排除重复元素
            if($k>0 && $nums[$k] == $nums[$k-1]){
                continue;
            }
            $left = $k+1;
            $right = $len-1;
            while($left<$right){
                $sum = $nums[$left]+$nums[$right]+$nums[$k];
                if($sum == 0){
                    $res[] = [$nums[$k],$nums[$left],$nums[$right]];
                    //排除重复元素
                    while($left<$right && $nums[$left]==$nums[$left+1]){
                        $left ++;
                    }
                    while($left<$right && $nums[$right]==$nums[$right-1]){
                        $right --;
                    }
                    $left++;
                    $right--;
                }elseif($sum < 0){
                    $left++;
                }else{
                    $right--;
                }
            }
        }
        return $res;
    }

    }
}
// @lc code=end

