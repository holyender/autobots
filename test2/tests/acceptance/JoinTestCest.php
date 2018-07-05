<?php


class JoinTestCest
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

    public function jointest(AcceptanceTester $I){



        $tmp = (string)rand(1,50000);
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

        $I->wait(10);

    }
}
