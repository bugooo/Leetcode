<?php
class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words) {
        $Morse = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
        $newArr = [];
        for($i=0;$i<count($words);$i++){
            $str = '';
            for($j=0;$j<strlen($words[$i]);$j++){
                $key = ord(substr($words[$i],$j,1))-ord("a");
                $str .= $Morse[$key];
            }
            if(!in_array($str,$newArr)){
                $newArr[] = $str;
            }
        }
        return count($newArr);

    }
}