<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
  	
	public function testOneTimesOne() {
		$this->assertEquals(1*1,1);
  	}
  	
  	public function testOnePlusTwo() {
		$this->assertEquals(1+2,3);
  	}

}

?>
