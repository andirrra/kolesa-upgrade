<?php

class SearchCest
{
    /**
    * Проверить поиск по тексту и количество элементов
    */
    public function checkThePrintedDressCount(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('//*[@id="search_query_top"]');
        $I->fillField("//*[@id='search_query_top']","Printed dress");
        $I->click("//*[@id='searchbox']/button");
        $I->seeNumberOfElements('.ajax_block_product',5);



    }
}
