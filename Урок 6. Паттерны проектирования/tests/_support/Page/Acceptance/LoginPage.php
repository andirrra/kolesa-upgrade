<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class LoginPage
{
    /**
     * Стандартный юзернэйм для успешной авторизации
     */
    public const USERNAME = 'standard_user';

    /**
     * Стандартный пароль для успешной авторизации
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Стандартный юзернэйм для негативной авторизации
     */
    public const LOCKEDUSER = 'locked_out_user';

    /**
     * Url страницы атворизации
     */
    public static $URL = '';

    /**
     * Селектор поля ввода для логина
     */
    public static $loginInput = '//input[@id="user-name"]';

    /**
     * Селектор поля ввода для пароля
     */
    public static $passwordInput = '//input[@id="password"]';

    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '//input[@id="login-button"]';

    /**
     * Селектор ошибки авторизации
     */
    public static $errorMessage = '.error-message-container.error';

    /**
     * Селектор кнопки закрытия ошибки
     */
    public static $errorButton = '.error-button';

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

    /**
     * Заполняет поле ввода заблокированным логином
     */
    public function fillLockedUserField()
    {
        $this->acceptanceTester->fillField(self::$loginInput, self::LOCKEDUSER);

        return $this;
    }

    /**
     * Заполняет поле ввода пароля
     */
    public function fillPasswordField()
    {
        $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);

        return $this;
    }

    /**
     * Кликает на кнопку авторизации
     */
    public function clickSubmitForLockedUser()
    {
        $this->acceptanceTester->click(self::$loginButton);

        return $this;
    }

    /**
     * Нажимает на крестик появившейся ошибки
     */
    public function clickErrorButton()
    {
        $this->acceptanceTester->click(self::$errorButton);

        return $this;
    }

    /**
     * Заполняет поле ввода логином
     */
    public function fillUsernameField()
    {
        $this->acceptanceTester->fillField(self::$loginInput, self::USERNAME);

        return $this;
    }

    /**
     * Нажимает на кнопку авторизации
     */
    public function clickSubmit()
    {
        $this->acceptanceTester->click(self::$loginButton);

        return new HomePage($this->acceptanceTester);
    }
}
