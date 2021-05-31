<?php
namespace Page\Acceptance;

class MainPageForSecondHomework
{
    /**
     * Селектор категории Dresses
     */
    public static $dressesCategory = '#block_top_menu > ul > li:nth-child(2)';

    /**
     * Селектор подкатегории Summer Dresses
     */
    public static $summerDressesButton = '//div[@id="block_top_menu"]/ul/li[2]/ul/li[3]/a';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * Нажимает на подкатегорию Summer Dresses
     */
    public function clickButton()
    {
        $this->acceptanceTester->click(self::$summerDressesButton);

        return new SearchPage($this->acceptanceTester);
    }
}
