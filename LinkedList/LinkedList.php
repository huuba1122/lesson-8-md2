<?php

include_once "Node.php";
class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;

    public function __construct(){
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirst($data){
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        $this->count++;
        if ($this->lastNode === null){
            $this->lastNode = $node;
        }
    }

    public function addLast($data){
        if ($this->firstNode === null){
            $this->addFirst($data);
        }else{
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        }
    }

    public function add($index, $data){
        if ($index === 0){
            $this->addFirst($data);
        }else{
            $node = new Node($data);
            $current = $this->firstNode;
            $previous = $this->firstNode;
            for ($i=0; $i < $index; $i++){
                $previous = $current;
                $current = $current->next;
            }

            $node->next = $current;
            $previous->next = $node;
            $this->count++;
        }
    }

    public function totalNode(){
        return $this->count;
    }

    public function getList(){
        $newArray = array();
        $current = $this->firstNode;
        while($current !== null){
            array_push($newArray, $current->readNode());
            $current = $current->next;
        }
        return $newArray;
    }

    public function deleteFirst(){
        if ($this->firstNode != null){
           $this->firstNode = $this->firstNode->next;
        }else{
            $this->firstNode = null;
        }
        $this->count--;
    }

    public function deleteLast(){
        if ($this->firstNode != null){
            if ($this->firstNode->next == null){
                $this->firstNode = null;
                $this->count--;
            }else{
                $previous = $this->firstNode;
                $current = $this->firstNode->next;

                while($current->next != null){
                    $previous = $current;
                    $current = $current->next;
                }
                $previous->next = null;
                $this->count--;
            }
        }
    }

    public function delete($index){
        $current = $this->firstNode;
        $previous = $this->firstNode;

        for ($i = 0; $i < $index; $i++){
            $previous = $current;
            $current = $current->next;
        }
        $previous->next = $current->next;
        $this->count--;
    }

    public function find($data){
        $current = $this->firstNode;

        while ($current->data != $data){
            if ($current->next === null){
                 return null;
            }else{
                $current = $current->next;
            }
        }
        return $current;
    }

    public function indexOf($data){
        $index = 0;
        $current = $this->firstNode;

        while ($current !== null){
            if ($current->readNode() === $data){
                $arr[] = $index;
            }
            $current = $current->next;
            $index++;
        }
        return $arr;
    }
}

$linked = new LinkedList();
echo "<pre>";
print_r($linked->getList());
$linked->addFirst(2);
$linked->addFirst(1);
$linked->addFirst('Start');
$linked->addLast(3);
$linked->addLast('End');
print_r($linked->getList());

$linked->add(0, -1);
$linked->add(3, 4);
$linked->add(7, 7);
print_r($linked->getList());
$linked->deleteLast();
print_r($linked->getList());
$linked->deleteFirst();
print_r($linked->getList());
$linked->delete(2);
print_r($linked->getList());
print_r($linked->find(2));
print_r($linked->indexOf(3));
print_r($linked->totalNode());




