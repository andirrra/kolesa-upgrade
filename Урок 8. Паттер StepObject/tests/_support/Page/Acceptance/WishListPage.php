<?php
namespace Page\Acceptance;

class WishListPage
{
    /**
     * Локатор кнопки личного кабинета
     *
     * @var string
     */
    public static $cabinetButton = "#header > div.nav > div > div > nav > div:nth-child(1) > a > span";

    /**
     * Селектор кнопки избранного
     */
    public static $wishListButton = "//*[@class='icon-heart']";

    /**
     * Селектор количества товаров в избранном
     */
    public static $sumOfQty = "//*[@id='wishlist_34220']/td[2]/text()";


}
