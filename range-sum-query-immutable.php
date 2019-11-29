<?php
class NumArray {
    /**
     * @param Integer[] $nums
     */
    public $sum=[];
    function __construct($nums) {
        $this->sum[0] = $nums[0];
        for($i=1;$i<count($nums);$i++){
            $this->sum[$i] = $this->sum[$i-1]+$nums[$i];
        }
    }

    /**
     * @param Integer $i
     * @param Integer $j
     * @return Integer
     */
    function sumRange($i, $j) {
        if($i==0){
            return $this->sum[$j];
        }else{
            return $this->sum[$j]- $this->sum[$i-1];
        }
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($i, $j);
 */