<?php

require_once(dirname(__FILE__) . '../Scenarios/General.php');//dir change
class LocalInterface extends PHPUnit_Extensions_Selenium2TestCase
{
    public $countryCode;

    protected function setUp() {
        global $argv; //remove $argc, it is not used
        $this->countryCode = $argv[2];
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://google.com/');
    }

    public function testHeader() {
        $this->$session = prepareSession();//change $session
        $this->currentWindow()->maximize();
        $headerScenario = new GeneralScenario;
        $headerScenario->setI($this);
        $headerScenario->setTranslation($this->countryCode= $argv[2]);//add argument
        $headerScenario->runGeneralScenario();
    }
}
?>