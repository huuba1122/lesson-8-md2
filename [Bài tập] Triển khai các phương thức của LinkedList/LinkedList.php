<?php
//include_once "Node.php";
//
//class LinkedList
//{
//    private $count;
//    private $firstNode;
//    private $lastNode;
//
//    public function __construct()
//    {
//        $this->count = 0;
//        $this->lastNode = NULL;
//        $this->firstNode = NULL;
//    }
//
//    function addFirst($data)
//    {
//        $node = new Node($data);
//        $node->next = $this->firstNode;
//        $this->firstNode = $node;
//        $this->count++;
//
//        if ($this->lastNode === NULL) {
//            $this->lastNode = $node;
//        }
//    }
//
//    function getLinkedList()
//    {
//        $listData = array();
//        $current = $this->firstNode;
//
//        while ($current != NULL) {
//            array_push($listData, $current->getNode());
//            $current = $current->next;
//        }
//        return $listData;
//    }
//
//    function addLast($data)
//    {
//        if ($this->firstNode === NULL) {
//            $this->addFirst($data);
//        } else {
//            $node = new Node($data);
//            $this->lastNode->next = $node;
//            $node->next = NULL;
//            $this->lastNode = $node;
//            $this->count++;
//        }
//    }
//
//    function add($index, $data)
//    {
//        if ($index === 0) {
//            $this->addFirst($data);
//        }
//        $node = new Node($data);
//        $current = $this->firstNode;
//        $pre = $this->firstNode;
//
//        for ($i = 0; $i < $index; $i++) {
//            $pre = $current;
//            $current = $current->next;
//        }
//        $pre->next = $node;
//        $node->next = $current;
//
//        $this->count++;
//    }
//
//    function deleteFirst()
//    {
//        if ($this->firstNode != NULL) {
//            if ($this->firstNode->next != NULL) {
//                $this->firstNode = $this->firstNode->next;
//            }
//        } else {
//            $this->firstNode = NULL;
//        }
//        $this->count--;
//    }
//
//    function deleteLast()
//    {
//        if ($this->firstNode != NULL) {
//            if ($this->firstNode->next == NULL) {
//                $this->firstNode = NULL;
//                $this->count--;
//            } else {
//                $pre = $this->firstNode;
//                $current = $this->firstNode->next;
//
//                while ($current->next != NULL) {
//                    $pre = $current;
//                    $current = $current->next;
//                }
//
//                $pre->next = NULL;
//                $this->count--;
//            }
//        }
//    }
//
//    function delete($index)
//    {
//        $current = $this->firstNode;
//        $pre = $this->firstNode;
//
//        for ($i = 0; $i < $index; $i++) {
//            $pre = $current;
//            $current = $current->next;
//        }
//        $pre->next = $current->next;
//        $this->count--;
//    }
//
//    function totalNode()
//    {
//        return $this->count;
//    }
//
//    function find($data)
//    {
//
//        $current = $this->firstNode;
//
//        while ($current !== NULL){
//            if ($current->getNode() ===$data){
//                return $current->getNode();
//            }
//            $current = $current->next;
//        }
//
//    }
//    function indexOf($data)
//    {
//        $index = 0;
//        $current = $this->firstNode;
//
//        while ($current !== NULL){
//            if ($current->getNode() ===$data){
//                $arr[] = $index;
//            }
//            $current = $current->next;
//            $index++;
//        }
//        return $arr;
//    }
//
//
//}
//
//$linkedList = new LinkedList();
//$linkedList->addFirst('O');
//$linkedList->addFirst('L');
//$linkedList->addFirst('L');
//$linkedList->addFirst('E');
//$linkedList->addFirst('H');
//$linkedList->addLast('W');
//$linkedList->add(1, "G");
//$linkedList->add(2, "A");
//$linkedList->deleteFirst();
//$linkedList->deleteLast();
//$linkedList->delete(2);
//echo $linkedList->totalNode();
//echo "<br>";
//
//echo $linkedList->find("G");
//echo "<br>";
//print_r($linkedList->indexOf("L"));
//
//echo "<pre>";
//print_r($linkedList->getLinkedList());
//echo "</pre>";