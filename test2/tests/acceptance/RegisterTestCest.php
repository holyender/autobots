<?php


class RegisterTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function registertest(AcceptanceTester $I){
    	$I->amOnPage('/');
    	#$I->click('log in');
    	$I->amOnPage('/user');
    	$I->click('Sign up');
    	$I->amOnPage('/user/register');

        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'testregisterFN');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'testregisterLN');
        $I->fillField('#edit-name', 'testregisterUser1');
        $I->fillField('#edit-mail', 'testregisteremail1@email.com');
        $I->fillField('#edit-pass-pass1', 'Testregisterpass1!');
        $I->fillField('#edit-pass-pass2', 'Testregisterpass1!');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->click('#edit-submit');


        $I->wait(10);

    }
}
