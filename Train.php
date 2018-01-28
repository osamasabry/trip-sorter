<?php

/**
* 
*/
class Train
{
	public $train;
	function __construct(string $route)
	{
		if($route == 'route1') 
			$result = $this->route1();
		else 
			$result =  "Not Found Yet !!";
		$this->train = $result;
	}


	private function route1()
	{
		return "Take train 78A from Madrid to Barcelona. Sit in seat 45B .";		
	}

	public function train()
	{
		return $this->train;			
	}
}

?>