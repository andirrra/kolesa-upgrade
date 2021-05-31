<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\HomePage;

/**
 * Класс для проверки авторизации
 */
class LoginCest
{
    /**
     * Проверяет успешную авторизацию
     */
    public function checkSuccessLogin(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);

        $I->amOnPage(\Page\Acceptance\LoginPage::$URL);
        $loginPage->fillUsernameField()
            ->fillPasswordField()
            ->clickSubmit();
        $I->seeInCurrentUrl(HomePage::$URL);
        $I->waitForText('PRODUCTS',5, HomePage::$titleBlock);
    }

    /**
     * Проверяет негативную авторизацию
     */
    public function checkNegativeLogin(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $loginPage->fillLockedUserField()
            ->fillPasswordField()
            ->clickSubmitForLockedUser();
        $I->seeElement(LoginPage::$errorMessage);
        $loginPage->clickErrorButton();
        $I->dontSeeElement(LoginPage::$errorMessage);
    }
}
