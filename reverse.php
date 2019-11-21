<?php
/**
 * 题目描述：给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。
 * 注意:假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。
 * 链接：https://leetcode-cn.com/problems/reverse-integer
 * @param Integer $x
 * @return Integer
*/
function reverse($x){
    //判断是否有符号
    $sign = false;
    if ($x < 0) {
    $sign = true;
    }
    //计算范围
    $left = pow(2, 31);
    $left = '-'.$left;
    $right = pow(2, 31) - 1;
    $len = strlen($x);
    //反转
    $new = '';
    for ($i = $len - 1; $i > 0; $i--) {
        $new .= substr($x, $i, 1);
    }
    //第0位的判断
    if (!$sign) {
        $new .= substr($x, 0, 1);
    }
    $new = intval($new);
    if($sign){
        $new = '-' . $new;
    }
    //判断是否溢出
    if ($new < $left || $new > $right) {
        return 0;
    }
    return $new;
}
