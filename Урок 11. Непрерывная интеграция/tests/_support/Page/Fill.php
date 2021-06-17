<?php
namespace Page;

/**
 * PageObject для страницы формы
 */
class Fill
{
    /**
     * Локатор поля имени
     */
    public static $firstName = "//*[@id = 'firstName']";

    /**
     * Локатор поля имени
     */
    public static $lastName = "//*[@id = 'lastName']";

    /**
     * Локатор поля имэйла
     */
    public static $email = "//*[@type = 'email']";

    /**
     * Локатор поля номера
     */
    public static $phoneNumber = "//*[@id = 'phoneNumber']";

    /**
     * Локатор поля адреса
     */
    public static $address = "//*[@id = 'address']";

    /**
     * Локатор поля города
     */
    public static $city = "//*[@id = 'city']";

    /**
     * Локатор поля региона
     */
    public static $state = "//*[@id = 'state']";

    /**
     * Локатор поля почты
     */
    public static $postal = "//*[@id = 'postal']";

    /**
     * Локатор кнопки регистрации
     */
    public static $registerNumber = "//*[@type = 'submit']";

    /**
     * Локатор выбора типа оплаты
     */
    public static $paymentType = "//*[@id='input_32_paymentType_credit']";

    /**
     * Локатор поля имени в методе оплаты
     */
    public static $paymentName = "//*[@id='input_32_cc_firstName']";

    /**
     * Локатор поля фамилии в методе оплаты
     */
    public static $paymentSurname = "//*[@id='input_32_cc_lastName']";

    /**
     * Локатор поля фамилии в методе оплаты
     */
    public static $creditCardNumber = "//*[@id='input_32_cc_number']";

    /**
     * Локатор дефолтнгого поля месяца
     */
    public static $monthExpiration = "//*[@id='input_32_cc_exp_month']";

    /**
     * Локатор поля месяца
     */
    public static $mayExpiration = "//*[@id='input_32_cc_exp_month']/option[6]";

    /**
     * Локатор дефолтнгого поля года
     */
    public static $yearExpiration = "//*[@id='input_32_cc_exp_year']";

    /**
     * Локатор поля года
     */
    public static $currentYearExpiration = "//*[@id='input_32_cc_exp_year']/option[2]";
}