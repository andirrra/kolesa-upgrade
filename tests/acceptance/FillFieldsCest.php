<?php

namespace Tests\Acceptance;

use Faker\Factory;
use Page\Fill;
use Helper\CustomFakerProvider;

/**
 * Класс для проверки формы
 */
class FillFieldsCest
{
    /**
     * Тест на проверку заполнения полей с помощью фейкера
     */

    public function checkFillField(\AcceptanceTester $I)
    {
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));

        $firstName = $faker->firstName;
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $faker->phoneNumber;
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->region;
        $postal = $faker->postcode;
        $creditCardNumber = $I->getFaker()->createCreditCardNumber();

        $I->amOnPage('');
        $I->fillField(Fill::$firstName, $firstName);
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email, $email);
        $I->fillField(Fill::$phoneNumber, $phoneNumber);
        $I->fillField(Fill::$address, $address);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postal, $postal);
        $I->click(Fill::$paymentType);
        $I->fillField(Fill::$paymentName, $firstName);
        $I->fillField(Fill::$paymentSurname, $lastName);
        $I->fillField(Fill::$creditCardNumber,$creditCardNumber);
        $I->click(Fill::$monthExpiration);
        $I->click(Fill::$mayExpiration);
        $I->click(Fill::$yearExpiration);
        $I->click(Fill::$currentYearExpiration);
        $I->click(Fill::$registerNumber);
        $I->waitForText('Good job');
    }
}