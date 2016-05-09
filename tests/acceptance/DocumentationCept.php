<?php 
$I = new \Step\Acceptance\CRMUserSteps($scenario);
$I->wantTo('see whether user documentation is accessible');

$I->amOnPage('?r=site/docs');
$I->see('Documentation', 'h1');
$I->seeLargeBodyOfText();
