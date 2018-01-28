<?php

/**
* 
*/
class Flight
{
	public $flight ;

	function __construct(string $route)
	{
		if($route == 'route3') 
			$result = $this->route3();
		else 
			$result = $this->route4();

		$this->flight= $result ;		
	}


	private function route3()
	{
		return "from Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A.
				Baggage drop at ticket counter 344.";		
	}

	private function route4()
	{
		return "from Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B.
				Baggage will we automatically transferred from your last leg.";		
	}

	public function flight()
	{
		return $this->flight;			
	}

}

?>