<?php
/**
* 
*/
class Bus
{
	public $bus;
	function __construct(string $route)
	{
		if($route == 'route2') 
			$result = $this->route2();
		else 
			$result = "Not Found Yet !!";
		$this->bus = $result;
	}


	private function route2()
	{
		return "Take the airport bus from Barcelona to Gerona Airport. No seat assignment .";		
	}

	public function bus()
	{
		return $this->bus;			
	}

}

?>