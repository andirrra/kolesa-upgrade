<?php

class SearchCest
{
    /**
     * Проверить поиск по тексту и открытие модального окна
     */
    public function checkSearchByText(AcceptanceTester $I)

    {
        $itemFormCss          = '#homefeatured > li:nth-child(2)';
        $itemFormXpath        = '//ul[@id="homefeatured"]/li[2]';
        $quickViewFormCss     = '#homefeatured > li:nth-child(2) > div > div.left-block';
        $quickViewFormXPath   = '//ul[@id="homefeatured"]/li[2]/div/div[1]';
        $quickViewButtonCss   = '#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view';
        $quickViewButtonXPath = '//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]';
        $modalFormCss         = '#index > div.fancybox-overlay';
        $modalFormXpath       = '//body[@id="index"]/div[2]/div';
        $iframeCss            = '.fancybox-iframe';
        $iframeXpath          = '//div/iframe[@class="fancybox-iframe"]';

        $I->amOnPage('');
        $I->waitForElement('#homefeatured > li:nth-child(2)',10);
        $I->moveMouseOver( '#homefeatured > li:nth-child(2) > div > div.left-block');
        $I->click('//ul[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]');
        $I->waitForElementVisible('//body[@id="index"]/div[2]/div', 15);
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForText('Blouse',10);
    }
}
