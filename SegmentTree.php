<?php
class SegmentTree{
    private $tree=[];
    private $data=[];
    private $count=0;
    function __construct($arr){
        $this->count = count($arr);
        for($i = 0 ; $i <  $this->count; $i ++){
            $this->data[$i] = $arr[$i];
        }
        self::buildSegmentTree(0, 0,  $this->count - 1);

    }

    // 在treeIndex的位置创建表示区间[l...r]的线段树
    private function buildSegmentTree($treeIndex, $l, $r){
        if($l == $r){
            $this->tree[$treeIndex] =$this->data[$l];
            return;
        }
        $leftTreeIndex = self::leftChild($treeIndex);
        $rightTreeIndex = self::rightChild($treeIndex);
        $mid = $l+floor(($r - $l) / 2);
        self::buildSegmentTree($leftTreeIndex, $l, $mid);
        self::buildSegmentTree($rightTreeIndex, $mid + 1, $r);
        $this->tree[$treeIndex] = $this->tree[$leftTreeIndex]+$this->tree[$rightTreeIndex];
    }

    // 返回完全二叉树的数组表示中，一个索引所表示的元素的左孩子节点的索引
    private function leftChild($index){
        return 2*$index + 1;
    }

    // 返回完全二叉树的数组表示中，一个索引所表示的元素的右孩子节点的索引
    private function rightChild($index){
        return 2*$index + 2;
    }

    // 返回区间[queryL, queryR]的值
    public function query($queryL,$queryR){
        if(($queryL < 0 || $queryL >= $this->count) ||
            ($queryR < 0 || $queryR >= $this->count) || $queryL > $queryR)
            throw new Exception("Index is illegal.");

        return self::query_r(0, 0, $this->count - 1, $queryL, $queryR);
    }

    // 在以treeIndex为根的线段树中[l...r]的范围里，搜索区间[queryL...queryR]的值
    private function query_r($treeIndex, $l, $r, $queryL, $queryR){

        if($l == $queryL && $r == $queryR)
            return $this->tree[$treeIndex];
        $mid = $l+floor(($r - $l) / 2);
        // treeIndex的节点分为[l...mid]和[mid+1...r]两部分

        $leftTreeIndex = self::leftChild($treeIndex);
        $rightTreeIndex = self::rightChild($treeIndex);
        if($queryL >= $mid + 1)
            return self::query_r($rightTreeIndex, $mid + 1, $r, $queryL, $queryR);
        else if($queryR <= $mid)
            return self::query_r($leftTreeIndex, $l, $mid, $queryL, $queryR);

        $leftResult = self::query_r($leftTreeIndex, $l, $mid, $queryL, $mid);
        $rightResult = self::query_r($rightTreeIndex, $mid + 1, $r, $mid + 1, $queryR);
        return $leftResult+$rightResult;
    }

    // 将index位置的值，更新为e
    public function set($index, $e){

        if($index < 0 || $index >= $this->count)
            throw new Exception("Index is illegal");

        $this->data[$index] = $e;
        self::set_r(0, 0, $this->count-1, $index, $e);
    }

    // 在以treeIndex为根的线段树中更新index的值为e
    private function set_r($treeIndex, $l, $r, $index,$e) {

        if ($l == $r) {
            $this->tree[$treeIndex] = $e;
            return;
        }
        $mid = $l+floor(($r - $l) / 2);
        // treeIndex的节点分为[l...mid]和[mid+1...r]两部分
        $leftTreeIndex = self::leftChild($treeIndex);
        $rightTreeIndex = self::rightChild($treeIndex);
        if ($index >= $mid + 1)
            self::set_r($rightTreeIndex, $mid + 1, $r, $index, $e);
        else // index <= mid
            self::set_r($leftTreeIndex, $l, $mid, $index, $e);

        $this->tree[$treeIndex] = $this->tree[$leftTreeIndex] + $this->tree[$rightTreeIndex];
    }
}
?>