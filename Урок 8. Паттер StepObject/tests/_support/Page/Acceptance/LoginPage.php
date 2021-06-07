<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * Локатор кнопки авторизации на главной странице
     */
    public static $loginButton = "//*[@class='login']";

    /**
     * Локатор формы авторизации
     */
    public static $loginForm = "//*[@id='login_form']";

    /**
     * Локатор имэйла
     */
    public static $email = "//*[@id='email']";

    /**
     * Локатор пароля
     */
    public static $password = "//*[@id='passwd']";

    /**
     * Локатор кнопки авторизации
     */
    public static $submitButton = "//*[@id='SubmitLogin']";

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
