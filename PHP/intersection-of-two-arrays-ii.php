<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
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
            if(in_array($arr[$i],$arr2)){
                $newArr[] = $arr[$i];
                $key2 = array_search($arr[$i],$arr2);
                unset($arr2[$key2]);

            }
        }
        return $newArr;
    }
}