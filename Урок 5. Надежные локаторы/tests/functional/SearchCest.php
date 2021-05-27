<?php

class SearchCest
{
    /**
     * Проверить поиск по тексту и количество элементов
     */
    public function checkThePrintedDressCount(FunctionalTester $I)
    {
        $searchFormScc         = '#searchbox';
        $searchFormXpath       = '//form[@id="searchbox"]';
        $inputTextCss          = '#search_query_top';
        $inputTextXPath        = '//ul[@id="homefeatured"]/li[2]/div/div[1]';
        $searchButtonCss       = '#searchbox > button';
        $searchButtonXpath     = '//form[@id="searchbox"]/button';
        $numberOfElementsCss   = '.ajax_block_product';
        $numberOfElementsXpath = '//div[@class="product-container"]';

        $I->amOnPage('');
        $I->seeElement('#searchbox');
        $I->fillField("//input[@id='search_query_top']","Printed dress");
        $I->click("//*[@id='searchbox']/button");
        $I->seeNumberOfElements('.ajax_block_product',5);
    }
}
