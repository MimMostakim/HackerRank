<?php 

class Node {
    public $data;
    public $next;
}

class Linked_list{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function push_back($newElement){
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;

        if($this->head == null){
            $this->head = $newNode;

        }else {
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null){
                $temp = $temp->next;

            }
            $temp->next = $newNode;
        }

    }

    public function print_list(){
        $temp= new Node();
        $temp= $this->head;
        if($temp != null){
            echo "\nThe list contains: ";
            while($temp != null){
            echo $temp->data." ";
            $temp = $temp->next;
            }
        }else {
            echo "\nThe list is empty.";
          }
    }

};

$List = new Linked_list();

$List->push_back(10);
$List->push_back(20);
$List->push_back(30);
$List->print_list();