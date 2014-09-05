<?php
require_once(dirname(dirname(__FILE__)) . '/' . '../General.php');//change dir

class FooterActionsCustomerService extends GeneralActions
{
    public function goToMyAccount()
    {
        $this->byCssSelector('.st_footer_customerService_myAccount')->click();
        $this->iAmOn('LoginOrRegister',null,1);//add element
    }

    public function goToReturns()
    {
        $this->byCssSelector('.st_footer_customerService_returns')->click();
        $this->iAmOn('Returns',null,1);
    }

    public function goToContactPage()
    {
        $this->byCssSelector('.st_footer_customerService_contacts')->click();
        $this->iAmOn('Contact',null,1);
    }
}
