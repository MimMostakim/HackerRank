<?php
$_fp = fopen("php://stdin", "r");

class Node {

    public $data;
    public $next;

    public function __construct($data)
    {
       $this->data = $data;
    
    }
}

class LinkedList {
    public $head;

    public function insertNodeAtHead ($data){
        
        
        if ($this->head == null) {
            
            $this->head = $data;
            
        } else {
            
            $current_node = $this->head;
            
            $this->head = $data;
            
            $this->head->next = $current_node;

        }
        
    }

    public function displayAll () {
        $current_node = $this->head;
        $list_count = 0;

        while($current_node !== null){
            if($list_count == 1) {
                echo PHP_EOL ;
            }
            echo $current_node->data;
            $current_node = $current_node->next;
            $list_count++;
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
    $LinkedList->insertNodeAtHead($my_node);    
}

$LinkedList->displayAll();

?>