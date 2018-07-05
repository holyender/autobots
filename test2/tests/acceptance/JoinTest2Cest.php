<?php


$renewTmp = "";

class JoinTest2Cest
{
    public function _before(AcceptanceTester $I)
    {
        /*
        #echo "before";
        $command = escapeshellcmd('python functionFormScraper.py inputurl.txt');
        $output = shell_exec($command)
        #echo "command executed";

        $myfile = fopen("idlist.txt", "r") or die("unable to open file!$%");

        echo fread($myfile, filesize("idlist.txt"));

        $I->openFile('idlist.txt');
        */
        //$I->openFile('idlist.txt');

    }

    public function _after(AcceptanceTester $I)
    {
    }


    public function individualtest(AcceptanceTester $I){



        //'.$tmp.' = rand(1,10000);
        $tmp = (string)rand(1,900000);

        $renewTmp = $tmp;

    	$I->amOnPage('/');
    	#$I->click('log in');
    	$I->amOnPage('/user');
    	$I->click('Sign up');
    	$I->amOnPage('/join/individual');

        $I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
        $I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        $I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        $I->fillField('#edit-profile-main-field-profile-phone-und-0-value', '1234567899');
        $I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
        $I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/individual/member-card');
        $I->wait(5);

        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/individual/review');
        $I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');

        $I->checkOption('#edit-membership-review-membership-terms');
        $I->click('#edit-continue');

        $I->wait(5);
        $I->amOnPage('/join/individual/payment-method');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        $I->wait(5);

        $I->click('#edit-continue');

        $I->wait(10);

        $I->see("Thank You");

    }

    public function individualrenewtest(AcceptanceTester $I){

        $I->amOnPage('/');
        #$I->click('log in');
        #$I->wait(2);
        $I->amOnPage('/user');
        $I->fillField('#edit-name', 'jointest476423@jointest.com');
        $I->fillField('#edit-pass', 'testregisterPassword');
        $I->click('#edit-submit');

        $I->wait(10);

    }




    public function dualtest(AcceptanceTester $I){
        $tmp = (string)rand(1,900000);
        $I->amOnPage('/');
        #$I->click('log in');
        $I->amOnPage('/user');
        $I->click('Sign up');
        $I->amOnPage('/join/dual');

        $I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
        $I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        $I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        $I->fillField('#edit-profile-main-field-profile-phone-und-0-value', '1234567899');
        $I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
        $I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/dual/member-card');
        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/dual/review');
        $I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');

        $I->checkOption('#edit-membership-review-membership-terms');
        $I->click('#edit-continue');

        $I->wait(5);
        $I->amOnPage('/join/dual/payment-method');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        $I->wait(5);

        $I->click('#edit-continue');

        $I->wait(10);
        $I->see("Thank You");






    }
    public function familytest(AcceptanceTester $I){
        $tmp = (string)rand(1,900000);
        $I->amOnPage('/');
        #$I->click('log in');
        $I->amOnPage('/user');
        $I->click('Sign up');
        $I->amOnPage('/join/family');

        $I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
        $I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        $I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        $I->fillField('#edit-profile-main-field-profile-phone-und-0-value', '1234567899');
        $I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
        $I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/family/member-card');
        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/family/review');
        $I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
        $I->checkOption('#edit-membership-review-membership-terms');
        $I->click('#edit-continue');

        $I->wait(5);
        $I->amOnPage('/join/family/payment-method');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        $I->wait(5);

        $I->click('#edit-continue');

        $I->wait(10);
        $I->see("Thank You");





    }
    public function visionarytest(AcceptanceTester $I){
        $tmp = (string)rand(1,900000);
        $I->amOnPage('/');
        #$I->click('log in');
        $I->amOnPage('/user');
        $I->click('Sign up');
        $I->amOnPage('/join/visionary');

        $I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
        $I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        $I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        $I->fillField('#edit-profile-main-field-profile-phone-und-0-value', '1234567899');
        $I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
        $I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/visionary/member-card');
        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/visionary/review');
        $I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
        $I->checkOption('#edit-membership-review-membership-terms');
        $I->click('#edit-continue');

        $I->wait(5);
        $I->amOnPage('/join/visionary/payment-method');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        $I->wait(5);

        $I->click('#edit-continue');

        $I->wait(10);
        $I->see("Thank You");





    }
    public function contributortest(AcceptanceTester $I){
        $tmp = (string)rand(1,900000);
        $I->amOnPage('/');
        #$I->click('log in');
        $I->amOnPage('/user');
        $I->click('Sign up');
        $I->amOnPage('/join/contributor');

        $I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
        $I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        $I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        $I->fillField('#edit-profile-main-field-profile-phone-und-0-value', '1234567899');
        $I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
        $I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/contributor/member-card');
        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/contributor/review');
        $I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
        $I->checkOption('#edit-membership-review-membership-terms');
        $I->click('#edit-continue');

        $I->wait(5);
        $I->amOnPage('/join/contributor/payment-method');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        $I->wait(5);

        $I->click('#edit-continue');

        $I->wait(10);
        $I->see("Thank You");





    }
    public function patrontest(AcceptanceTester $I){
        $tmp= (string)rand(1,900000);
        $I->amOnPage('/');
        #$I->click('log in');
        $I->amOnPage('/user');
        $I->click('Sign up');
        $I->amOnPage('/join/patron');

        $I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
        $I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        $I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        $I->fillField('#edit-profile-main-field-profile-phone-und-0-value', '1234567899');
        $I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
        $I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/patron/member-card');
        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/patron/review');
        $I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
        $I->checkOption('#edit-membership-review-membership-terms');
        $I->click('#edit-continue');

        $I->wait(5);
        $I->amOnPage('/join/patron/payment-method');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        $I->wait(5);

        $I->click('#edit-continue');

        $I->wait(10);
        $I->see("Thank You");





    }
    


}
