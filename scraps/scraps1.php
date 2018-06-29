    	$I->amOnPage('/join/individual/member-card');
    	$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
    	$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
    	$I->click('edit-continue');

    	wait(5);

    	$I->amOnPage('/join/individual/review');
    	$I->checkOption('edit-membership-review-membership-terms');
    	$I->click('edit-continue');

    	wait(5);
    	$I->amOnPage('/join/individual/payment-method');
    	$I->fillField('edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.'');
    	$I->fillField('edit-commerce-payment-payment-details-credit-card-owner', 'FN'.$tmp.' LN'.$tmp.'');
    	$I->fillField('edit-commerce-payment-payment-details-credit-card-number', '4242424242424242');
    	$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', '12 - December');
        $I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', '2025');
        $I->fillField('#edit-commerce-payment-payment-details-credit-card-code', '789');

        wait(5);

        $I->click('edit-continue');

        wait(10);


jenkins folder
/var/lib/jenkins/workspace/MostWantedBackstopTest/backstopjs/backstop_data/

##.slide-media.slide-video

chromedriver --no-sandbox --disable-dev-shm-usage --url-base=/wd/hub