<?php
require_once(dirname(dirname(__FILE__)) . '../Abstract/Test.php');//change dir

class TestModel extends Test
{
    public $topTopCatIds;

	public $topCatIds = array(); //this should be an array, declare it

	public $searchWord;

	public $login;

	public $password;

	public $productToBuy;

	public $pageSpecificElements;

	public function iSee($element = null) {
		if(!empty($element)) {
			sleep(600);
			$this->output("Checking if see element");
			$this->assertEquals(true,$element->displayed()); //reverse the values of assertEquals
		}
	}

	public function iDontSee($element = null) {
		if(!empty($element)) {
			sleep(1);
			$this->output("Checking if don't see element");
			$this->assertEquals(true,!$element->displayed());
		}
	}

	public function areEquals($elementOne, $elementTwo) {
		sleep(1);
		$this->output("Checking if elements are equals");
		$this->assertEquals($elementOne, $elementTwo);
	}

	public function areNotEquals($elementOne, $elementTwo) {
		sleep(1);
		$this->output("Checking if elements are not equals");
		$equals = ($elementOne !== $elementTwo);//sign change
		$this->assertEquals(true,$equals);
	}

	public function iAmOn($pageName = null, $element = null, $skip = null) {
	   if (!empty($pageName)) {
			sleep(1);
			$this->output("Checking if i am on " . $pageName);
            if($skip == null && !empty($element))
            {//changing the nested if to be more compacted
                    $this->assertEquals(true,$element->displayed());
                } else {
                    $this->assertEquals(true,$this->byCssSelector($this->pageSpecificElements[$pageName])->displayed());
                }
            }
	}
	
}
?>