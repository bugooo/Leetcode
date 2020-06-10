<?php
class LRUCache {
    /**
     * @param Integer $capacity
     */
    public $capacity;
    public $LRUArr=[];
    function __construct($capacity) {
        $this->capacity = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if(array_key_exists($key,$this->LRUArr)){
            $tmp = $this->LRUArr[$key];
            unset($this->LRUArr[$key]);
            $this->LRUArr[$key]= $tmp;
            return $tmp;
        }
        return -1;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        //判断是否在数组中 在就删除 并且把新值插入数组最后
        if(array_key_exists($key,$this->LRUArr)){
            unset($this->LRUArr[$key]);
        }else{
            $len =count($this->LRUArr);
            if($len == $this->capacity){
                //超出则删除第一个元素，将新元素添加到数组尾
                //$this->LRUArr = array_slice($this->LRUArr,1,NULL,true);
                foreach($this->LRUArr as $k=>$v){
                    unset($this->LRUArr[$k]);
                    break;
                }
            }
        }
        $this->LRUArr[$key]=$value;
    }
}
$obj = new LRUCache(2);
$obj->put(1, 1);
$obj->put(2, 2);
$obj->get(1);
$obj->put(3, 3);
$obj->get(2);       // 返回 -1 (未找到)
$obj->put(4, 4);    // 该操作会使得密钥 1 作废
$obj->get(1);       // 返回 -1 (未找到)
$obj->get(3);       // 返回  3
$obj->get(4);       // 返回  4
