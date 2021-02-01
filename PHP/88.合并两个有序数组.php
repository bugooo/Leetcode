/*
 * @lc app=leetcode.cn id=88 lang=php
 *
 * [88] 合并两个有序数组
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n){
        if($m == 0){
            $nums1 = $nums2;
            return;
        }

        if($n == 0){
            return;
        }
        if($nums2[0]>$nums1[$m-1]){
            $nums1 = $nums1+$nums2;
            return;
        }
        if($nums2[$n-1]<$nums1[0]){
            $nums1 = $nums2+$nums1;
            return;
        }
        $newArr = [];
        $i = 0;
        $j = 0;
        while(count($newArr)<$m+$n){
            if($i<$m && $j<$n){
                if($nums1[$i] < $nums2[$j]){
                    $min = $nums1[$i];
                    $i++;
                }else($nums1[$i] > $nums2[$j]){
                    $min = $nums2[$j];
                    $j++;
                }
                $newArr[] = $min;
            }else{
                if($i < $m){
                    $nums1 = array_merge($newArr,array_slice($i,$nums1));
                }
                if($j < $n){
                    $nums1 = array_merge($newArr,array_slice($j,$nums2));
                }
            }   
        }  
    }
}
// @lc code=end

