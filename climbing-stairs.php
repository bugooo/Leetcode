<?php
class Solution {
    private $climbStairs=[1=>1,2=>2];
    /**
     * @param Integer $n
     * @return Integer
     */
    //递归 F(n)= F(n-1)+F(n-2)
    function climbStairs($n){
        if(array_key_exists($n,$this->climbStairs)){
            return $this->climbStairs[$n];
        }
        $this->climbStairs[$n] = $this->climbStairs($n-1)+$this->climbStairs($n-2);
        return $this->climbStairs[$n];
    }
}