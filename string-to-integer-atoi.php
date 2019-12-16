<?php
class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        $len = strlen($str);
        if($len<1){
            return 0;
        }
        $num = "";
        $sign = "";
        $flag = false;
        for($i=0;$i<$len;$i++){

            if($str[$i] == " " && $num == "" && $flag == false){
                continue;
            }
            if($sign == "" && $flag == false){
                if($str[$i] == "-"){
                    $sign = "-";
                    $flag = true;
                    continue;
                }elseif($str[$i] == "+"){
                    $sign = "+";
                    $flag = true;
                    continue;
                }
            }
            if(!is_numeric($str[$i])){
                break;
            }

            $flag = true;
            if($str[$i] == 0 && $num == ""){
                continue;
            }
            $num .=$str[$i];
        }

        if($num == ""){
            return 0;
        }
        if($sign == "-"){
            $num = $sign.$num;
        }

        if($num < -1<<31){
            return -1<<31;
        }
        if($num > (1<<31)-1){
            return (1<<31)-1;
        }
        return $num;
    }

}

$a = new Solution();
echo $a->myAtoi('   +0 123');
echo "\r\n";
echo $a->myAtoi('   -12');
echo "\r\n";
echo $a->myAtoi(' 2  -12');
echo "\r\n";
echo $a->myAtoi(' ##2  -12');
echo "\r\n";
echo $a->myAtoi(' -');
echo "\r\n";
echo $a->myAtoi(' -91283472332');
echo "\r\n";
echo $a->myAtoi('+-3');
echo "\r\n";
echo $a->myAtoi('-10000001');
echo "\r\n";
echo $a->myAtoi('-0000001');
echo "\r\n";
echo $a->myAtoi('-+1');
echo "\r\n";
echo $a->myAtoi('420');
echo "\r\n";
echo $a->myAtoi('032');
echo "\r\n";
echo $a->myAtoi('- 234');
echo "\r\n";
echo $a->myAtoi('0-1');
echo "\r\n";