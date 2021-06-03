<?php

use Page\Acceptance\SearchPage;
use Page\Acceptance\MainPageForSecondHomework;

/**
 * Класс для проверки раскладки результатов поиска
 */
class SearchCest
{
    /**
     * Проверяет раскладку в поиске
     */
    public function checkListView(AcceptanceTester $I)
    {
        $mainPage   = new MainPageForSecondHomework($I);
        $searchPage = new SearchPage($I);

        $I->amOnPage('');
        $I->moveMouseOver(MainPageForSecondHomework::$dressesCategory);
        $mainPage->clickButton();
        $I->waitForElement(SearchPage::$gridView);
        $searchPage->clickListViewButton();
        $I->waitForElement(SearchPage::$listView);
    }
}