<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * URL страницы подкатегории Summer Dresses
     */
    public static $URL = '/index.php?id_category=11&controller=category';

    /**
     * Селектор Grid View
     */
    public static $gridView = '.product_list.row.grid';

    /**
     * Селектор List View
     */
    public static $listView = '.product_list.row.list';

    /**
     * Селектор кнопки List View
     */
    public static $listViewButton = '.icon-th-list';

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

    /**
     * Нажимает на List View
     */
    public function clickListViewButton()
    {
        $this->acceptanceTester->click(self::$listViewButton);

        return $this;
    }
}
