<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if(empty($strs)){
            return "";
        }
        $prefix = $strs[0];
        for($i=1;$i<count($strs);$i++){
            while(substr($strs[$i],0,strlen($prefix)) != $prefix){
                $prefix = substr($prefix,0,strlen($prefix)-1);
                if(empty($prefix)){
                    return "";
                }
            }
        }
        return $prefix;
    }
}