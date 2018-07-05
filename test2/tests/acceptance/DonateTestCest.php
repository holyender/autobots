<?php


class DonateTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }
    

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function logintest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        #$I->wait(2);
        #$I->click('log in');

        $I->amOnPage('/user');
    }

    public function donatetest(AcceptanceTester $I)
    {
        $tmp = (string)rand(1,900000);
        $I->amOnPage('/');
        $I->click('donations');
        $I->amOnPage('/make-monetary-donation-now');


        /*$I->submitForm('#commerce-checkout-form-donate', array('user' => array(
            'amount[amount]' => '500',
            'Dedication Message' => 'Dedication test message',
            'Honoree Title' => 'Dr.',

        )));
        */
        $I->wait(10);


        $I->checkOption('#edit-amount-amount-500');

        $I->fillField('Dedication Message', 'testDedicationMessage');
        $I->selectOption('#edit-amount-field-cobblestone-honoree-title-und', 'Dr.');
        $I->fillField('Honoree First Name','testHonorFN');
        $I->fillField('Honoree Last Name','testHonorLN');
        $I->fillField('Honoree Organization Name','testHonorOrg');
        $I->fillField('#edit-customer-profile-shipping-field-email-und-0-value','testHonorEmail'.$tmp.'@jointest.com');
        //$I->fillField('E-mail address','testHonorEmail'.$tmp.'@gmail.com');
        
        $I->fillField('First name','testFN');
        $I->fillField('Last name','testLN');
        $I->fillField('Company','testCompany');
        $I->selectOption('Country','United States');
        $I->fillField('Address 1','123 Test Street');
        $I->fillField('Address 2','apt 2b');
        $I->fillField('City','testCity');
        $I->selectOption('State','New York');
        $I->fillField('ZIP code','10027');
        $I->fillField('Phone','2019788216');

        //$I->click('Billing information');

        //$I->makeScreenshot();

        //$I->click('Billing information');

        //$I->makeScreenshot();

        $I->executeJS('jQuery("#edit-customer-profile-billing-commerce-customer-profile-copy").show()');

        //$I->see('#edit-customer-profile-billing-commerce-customer-profile-copy');
        //$I->waitForElement('#edit-customer-profile-billing-commerce-customer-profile-copy', 30); // secs
        //$I->jQuery("#edit-customer-profile-billing-commerce-customer-profile-copy").show(); 

        $I->checkOption('#edit-customer-profile-billing-commerce-customer-profile-copy');

        //$I->selectOption('My billing information is the same as my delivery information.','customer_profile_billing[commerce_customer_profile_copy]');
        //$I->click('//form/*[@type=submit]');

        $I->wait(10);

        //$I->click('Donate');
        $I->click('op'); //click donate button name of button is 'op'

        //$I->see('No, one-time only');

        $I->executeJS('jQuery("#recurring-form").show()');

        $I->waitForElement('#recurring-form', 30);

        $I->executeJS('jQuery("#ui-id-1").show()');
        //$I->makeScreenshot();

        $I->wait(10);

        $I->click('No, one-time only');
        //$I->makeScreenshot();

        //$I->wait(10);

        $I->amOnPage('/make-monetary-donation-now/review');

        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'testFN testLN');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');

        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        $I->wait(10);

        $I->click('op');

        $I->amOnPage('/make-monetary-donation-now/complete');

        $I->see('Thank You');

        $I->wait(10);














// we can use input name or id
        /*
        $I->fillField('user[email]','miles@davis.com');
        $I->selectOption('Gender','Male');
        $I->click('Update');

        $I->canSee('Monthly Donation');
        */

    }
}
