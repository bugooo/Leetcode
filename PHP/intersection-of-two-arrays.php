<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $count1 = count($nums1);
        $count2 = count($nums2);
        if($count1 == 0 || $count2==0){
            return [];
        }
        $newArr = [];
        if($count1 <= $count2){
            $arr = $nums1;
            $arr2 = $nums2;
        }else{
            $arr = $nums2;
            $arr2 = $nums1;
        }

        for($i=0;$i<count($arr);$i++){
            if(in_array($arr[$i],$arr2) && !in_array($arr[$i],$newArr)){
                $newArr[] = $arr[$i];
            }
        }
        return $newArr;
    }
}