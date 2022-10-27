<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

class Node {
    
    public $data;
    public $next;

    public function __construct ($data = null)
    {
        $this->data = $data;
    }
}

class LinkedList{
    
    public $head = null;

    public function insertNodeAtTail ( $data) {
        
        $newNode = $data;
        
        if ($this->head == null) {
            
            $this->head = $newNode;
            
        } else {
            
            $currentNode = $this->head;
            
            while ($currentNode-> next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }


    public function displayAll(){
        
        $currentNode = $this->head;
        
        while($currentNode !== null){
            
            echo $currentNode->data;
            $currentNode = $currentNode->next;
        }
    }
}

$LinkedList = new LinkedList();

$input_data = [];

while(! feof($_fp)){
    $input_data[] = fgets($_fp);  
}

for($i = 1; $i < count($input_data); $i++){
    
    $my_node = new Node($input_data[$i]);
    $LinkedList->insertNodeAtTail($my_node);    
}

$LinkedList->displayAll();

?>