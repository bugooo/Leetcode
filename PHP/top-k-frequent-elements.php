<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $arr = array_count_values($nums);
        $splPriorityQueue = new SplPriorityQueue();
        foreach($arr as $key=>$val){
            $splPriorityQueue->insert($key, $val);
        }
        $res = [];
        while($k>0){
            $res[] = $splPriorityQueue->extract();
            $k--;
        }
        return $res;
    }
}