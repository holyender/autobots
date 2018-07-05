<?php

class GiftTestCest{

	public function individualgift(AcceptanceTester $I){
		$tmp = (string)rand(1,900000);
		$I->amOnPage('/');
		$I->click('log in');
		$I->wait(2);
		$I->amOnPage('/user');
		$I->click('Sign up');
		$I->amOnPage('/gift/individual');

		$I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
		$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
		$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        //$I->fillField('#edit-profile-main-field-billing-phone-und-0-value', '1234567899');
		$I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/individual/member-card');

		$I->fillField('#edit-profile-main-mail', 'gifttest'.$tmp.'@jointest.com');
        #$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        #$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        //$I->fillField('#edit-profile-main-field-billing-phone-und-0-value', '1234567899');
		$I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');

		$I->fillField('#edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');

        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/individual/review');
		$I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');

		$I->checkOption('#edit-membership-review-membership-terms');
		$I->click('#edit-continue');

		$I->wait(5);
		$I->seeCurrentUrlEquals('/gift/individual/payment-method');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

		$I->wait(5);

		$I->click('#edit-continue');

		$I->wait(5);
		$I->see("Thank You");
		$I->seeCurrentUrlEquals('/gift/individual/complete');
		$I->wait(3);

	}


	public function dualgift(AcceptanceTester $I){
		$tmp = (string)rand(1,900000);
		$I->amOnPage('/');
		$I->amOnPage('/gift/dual');

		$I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
		$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
		$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/dual/member-card');

		$I->fillField('#edit-profile-main-mail', 'gifttest'.$tmp.'@jointest.com');
		$I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
		$I->fillField('#edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/dual/review');

		$I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
		$I->checkOption('#edit-membership-review-membership-terms');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/dual/payment-method');

		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');
		$I->wait(5);
		$I->click('#edit-continue');

		$I->wait(5);
		$I->see("Thank You");
		$I->seeCurrentUrlEquals('/gift/dual/complete');
		$I->wait(3);

	}

	public function familygift(AcceptanceTester $I){
		$tmp = (string)rand(1,900000);
		$I->amOnPage('/');
		$I->amOnPage('/gift/family');

		$I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
		$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
		$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/family/member-card');

		$I->fillField('#edit-profile-main-mail', 'gifttest'.$tmp.'@jointest.com');
		$I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
		$I->fillField('#edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/family/review');

		$I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
		$I->checkOption('#edit-membership-review-membership-terms');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/family/payment-method');

		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');
		$I->wait(5);
		$I->click('#edit-continue');

		$I->wait(5);
		$I->see("Thank You");
		$I->seeCurrentUrlEquals('/gift/family/complete');
		$I->wait(3);

	}

	public function visionarygift(AcceptanceTester $I){
		$tmp = (string)rand(1,900000);
		$I->amOnPage('/');
		$I->amOnPage('/gift/visionary');

		$I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
		$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
		$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/visionary/member-card');

		$I->fillField('#edit-profile-main-mail', 'gifttest'.$tmp.'@jointest.com');
		$I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
		$I->fillField('#edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/visionary/review');

		$I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
		$I->checkOption('#edit-membership-review-membership-terms');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/visionary/payment-method');

		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');
		$I->wait(5);
		$I->click('#edit-continue');

		$I->wait(5);
		$I->see("Thank You");
		$I->seeCurrentUrlEquals('/gift/visionary/complete');
		$I->wait(3);

	}

	public function contributorgift(AcceptanceTester $I){
		$tmp = (string)rand(1,900000);
		$I->amOnPage('/');
		$I->amOnPage('/gift/contributor');

		$I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
		$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
		$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/contributor/member-card');

		$I->fillField('#edit-profile-main-mail', 'gifttest'.$tmp.'@jointest.com');
		$I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
		$I->fillField('#edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/contributor/review');

		$I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
		$I->checkOption('#edit-membership-review-membership-terms');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/contributor/payment-method');

		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');
		$I->wait(5);
		$I->click('#edit-continue');

		$I->wait(5);
		$I->see("Thank You");
		$I->seeCurrentUrlEquals('/gift/contributor/complete');
		$I->wait(3);

	}

	public function patrongift(AcceptanceTester $I){
		$tmp = (string)rand(1,900000);
		$I->amOnPage('/');
		$I->amOnPage('/gift/patron');

		$I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
		$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
		$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/patron/member-card');

		$I->fillField('#edit-profile-main-mail', 'gifttest'.$tmp.'@jointest.com');
		$I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
		$I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
		$I->fillField('#edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/patron/review');

		$I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
		$I->checkOption('#edit-membership-review-membership-terms');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/patron/payment-method');

		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');
		$I->wait(5);
		$I->click('#edit-continue');

		$I->wait(5);
		$I->see("Thank You");
		$I->seeCurrentUrlEquals('/gift/patron/complete');
		$I->wait(3);

	}



}