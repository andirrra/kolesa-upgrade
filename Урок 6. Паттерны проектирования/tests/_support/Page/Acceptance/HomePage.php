<?php
namespace Page\Acceptance;

class HomePage
{
    /**
    * URL главной страницы товаров
    */
    public static $URL = '/inventory.html';

    /**
     * Селектор заголовка
     */
    public static $titleBlock = '//span[@class="title"]';

    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
