<?php
	class stack
	{
		public $item = 5;
		public $size = array();
		public $pointer = 0;

		public function push($data){
			if($this->pointer>=$this->item){
				echo "stack is overflow";
			}else{
				$this->size[$this->pointer] = $data;
				$this->pointer++;
			}
		}

		public function pop(){
			if(empty($this->size)){
				echo "cannot remove anymore. Array is empty";
			}else{
				array_pop($this->size);
			}
		}

	}

	$stack = new stack();
	$stack->push("10");
	$stack->push("1");
	$stack->push("20");
	$stack->push("30");
	$stack->push("40");
	print_r($stack->size);
	echo "<br>";
	$stack->pop();
	$stack->pop();
	$stack->pop();
	print_r($stack->size);

	
?>