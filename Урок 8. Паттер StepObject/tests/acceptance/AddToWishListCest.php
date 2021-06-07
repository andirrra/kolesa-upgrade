<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\WishListPage;
use Page\Acceptance\ProductsPage;

/**
 * Класс для проверки добавления товаров в избранное
 * @group test5
 */
class AddToWishListCest
{
    protected function login(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php?controller=authentication&back=my-account');
        $I->waitForElementVisible(LoginPage::$loginButton, 30);
        $I->click(LoginPage::$loginButton);
        $I-> waitForElementVisible(LoginPage::$loginForm);
        $I->fillField(LoginPage::$email, "tester123@mail.ru");
        $I->fillField(LoginPage::$password, "wwwqqq111");
        $I->click(LoginPage::$submitButton);
        $I->seeInCurrentUrl(ProductsPage::$accountPage);
        $I->click("//*[@id='header_logo']");

    }
    public const PRODUCTS_NMB = 2;

    /**
     * Проверка добавления товаров в корзину
     *
     * @before login
     */
    public function addToWishList(AcceptanceTester $I)
    {
        for ($i = 1; $i <= self::PRODUCTS_NMB; $i++) {
            $I->waitForElement(sprintf(ProductsPage::$firstProduct, $i));
            $I->moveMouseOver(sprintf(ProductsPage::$firstProduct, $i));
            $I->moveMouseOver(sprintf(ProductsPage::$quickViewButton, $i));
            $I->click(sprintf(ProductsPage::$quickViewButton, $i));
            $I->switchToIFrame(ProductsPage::$iframe);
            $I->wait(4);
            $I->waitForElementVisible(ProductsPage::$wishListButton);
            $I->click(ProductsPage::$wishListButton);
            $I->waitForElementClickable(ProductsPage::$successMessage);
            $I->click(ProductsPage::$successMessage);
            $I->switchToIFrame();
            $I->wait(3);
            $I->waitForElementVisible(ProductsPage::$iframeClose);
            $I->click(ProductsPage::$iframeClose);
            $I->wait(4);
        }
        $I->waitForElementVisible(WishListPage::$cabinetButton);
        $I->click(WishListPage::$cabinetButton);
        $I->waitForElementVisible(WishListPage::$wishListButton);
        $I->click(WishListPage::$wishListButton);

        $var = $I->grabTextFrom(WishListPage::$sumOfQty);
        $I->assertEquals(self::PRODUCTS_NMB, $var, "Checks number of products in wishlist");
    }

    /**
     * Разлогинивание
     *
     * @param \AcceptanceTester $I
     */
    protected function _after(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->waitForElementVisible(ProductsPage::$logout);
        $I->click(ProductsPage::$logout);
        $I->waitForElementNotVisible(ProductsPage::$logout);
    }
}
