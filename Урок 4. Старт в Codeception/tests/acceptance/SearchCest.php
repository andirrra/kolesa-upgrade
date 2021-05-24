<?php

class SearchCest
{
    /**
     * Проверить поиск по тексту и открытие модального окна
     */
    public function checkSearchByText(AcceptanceTester $I)

    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div');
        $I->moveMouseOver( '#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img' );
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->waitForElementVisible('//*[@id="index"]/div[2]/div', 15);

        // Запускаю фрагмент javascript-а, который может найти нужный iframe
        $frame_name = 'frame';
        $I->executeJS("$('.fancybox-iframe').attr('name', '$frame_name')");
        $I->switchToIFrame($frame_name);

        $I->see('Blouse');

    }
}
