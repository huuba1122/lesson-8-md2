<?php

class MyList
{
    public $size;
    public $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    function add($obj){
        array_push($this->elements, $obj);
    }

    function get($index){
        if ($index < $this->size()){
            return $this->elements[$index];
        }else{
            die('khong ton tai index trong mang');
        }
    }

    function insert($index, $obj){
        if (!$this->isEmpty() && $index < $this->size()){
            array_splice($this->elements, $index, 0, $obj);
        }else{
            die("khong tim duoc gia tri index trong mang");
        }
    }

    function remove($index){
        if (!$this->isEmpty() && $index < $this->size()){
            array_splice($this->elements, $index,1);
        }
    }

    function isEmpty(){
        if (count($this->elements) == 0){
            return true;
        }else{
            return false;
        }
    }

    function addAll($arr){
            $this->elements = array_merge($this->elements, $arr);
    }

    function indexOf($obj){
        if (!$this->isEmpty()){
            for ($i = 0; $i < $this->size(); $i++){
                if ($obj === $this->elements[$i]){
                    $arr[] = $i;
                }
            }
            return $arr;
        }
    }

    function clear(){
        $this->elements = array();
    }

    function sort(){
        if (!$this->isEmpty()){
            sort($this->elements);
        }
    }

    function size(){
        return count($this->elements);
    }
}

$mylist = new MyList();
echo $mylist->isEmpty();
$mylist->add("start");
$mylist->add(1);
$mylist->add(2);
$mylist->add(-3);
$mylist->add(4);
$mylist->add("end");
echo '<pre>';
print_r($mylist->elements);
print_r($mylist->get(3));
echo "<pre>";
$mylist->insert(2, -3);
print_r($mylist->elements);
$mylist->remove(3);
print_r($mylist->elements);
print_r($mylist->indexOf(-3));
$mylist->addAll([5, 6, 7]);
print_r($mylist->elements);
$mylist->sort();
print_r($mylist->elements);
echo $mylist->size();
