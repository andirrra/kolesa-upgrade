<?php
namespace Page\Acceptance;

class ProductsPage
{
    /**
     * Страница личного кабинета
     */
    public static $accountPage = '/index.php?controller=my-account';

    /**
     * Селектор iFrame
     *
     * @var string
     */
    public static $iframe = ".fancybox-iframe";

    /**
     * Селектор об успешнои добавлении в избранное
     *
     * @var string
     */
    public static $successMessage = "#product > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a";


    /**
     * Селектор кнопки закрытия iFrame
     *
     * @var string
     */
    public static $iframeClose = "#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a";


    /**
     * Селектор добавления в избранное
     *
     * @var string
     */
    public static $wishListButton = "//*[@id='wishlist_button']";

    /**
     * Селектор первого товара
     *
     * @var string
     */
    public static $firstProduct = "//*[@id='homefeatured']/li[%s]";

    /**
     * Селектор кнопки quick view
     *
     * @var string
     */
    public static $quickViewButton = '//*[@id="homefeatured"]/li[%s]/div/div[1]/div/a[2]';

    /**
     * Селектор модалки с сообщением об успешном добавлении товара
     *
     * @var string
     */
    public static $addSuccessModal= '//div[@id="layer_cart"]';

    /**
     * Селектор кнопки разлогинивания
     */
    public static $logout = "#header > div.nav > div > div > nav > div:nth-child(2) > a";
}
