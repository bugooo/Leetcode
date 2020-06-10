<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $len1 = count($nums1);
        $len2 = count($nums2);
        $i = 0;
        $j = 0;
        if($len1 >0 && $len2>0){
            while($i<$len1 && $j<$len2){
                if($nums1[$i]<$nums2[$j]){
                    $tmp[] = $nums1[$i];
                    $i++;
                }else{
                    $tmp[] = $nums2[$j];
                    $j++;
                }
            }
            if($i<$len1){
                $tmp = array_merge($tmp,array_slice($nums1,$i));
            }
            if($j<$len2){
                $tmp = array_merge($tmp,array_slice($nums2,$j));
            }
            $len = $len1+$len2;
        }
        if($len1 == 0){
            $len = $len2;
            $tmp = $nums2;
        }
        if($len2 == 0){
            $len = $len1;
            $tmp = $nums1;
        }

        $k = floor($len/2);
        if($len%2==0){
            return ($tmp[$k-1]+$tmp[$k])/2;
        }else{
            return $tmp[$k];
        }

    }
}