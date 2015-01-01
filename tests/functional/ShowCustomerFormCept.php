<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('SHOW NEW CUSTOMER FORM');
$I->amOnPage('/customers');
$I->click('Add a customer');
$I->amOnPage('/customer/add');
$I->fillField('title', 'Hobbit');
$I->fillField('body', 'By Peter Jackson');
$I->click('Save');
$I->see('page created'); // notice generated
$I->see('Hobbit','h1'); // head of page of is our title
$I->seeInCurrentUrl('pages/hobbit'); 
$I->seeInDatabase('pages', array('title' => 'Hobbit'));