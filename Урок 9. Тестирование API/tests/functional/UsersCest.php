<?php

use Faker\Factory;

class UsersCest

{
    public static         $defaultSchema = [
        "job"=>'string',
        "superhero"=>'boolean',
        "_id"=>'string',
        "email"=>'string',
        "name"=>'string',
        "owner"=>'string',
    ];

    public function checkUserCreate(FunctionalTester $I)
    {
        $faker = Factory::create('ru_RU');
        $url = 'human?_id=';

        $userData = [
            'email' => $faker->email,
            'owner' => $faker->userName,
            'job' => $faker->company,
            'name' => $faker->name
        ];
        $I->wantTo('Создать пользователя');
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human',$userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status'=>'ok']);
        $I->sendGet('people',$userData);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);
        $user_id = $I->grabDataFromResponseByJsonPath("0._id")[0];
        $I->wantTo('Изменить пользователя');
        $I->sendPut($url.$user_id,['name'=>'Andira Superstar']);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['nModified'=>'1']);
        $I->wantTo('Удалить пользователя');
        $I->sendDelete($url.$user_id);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['deletedCount'=>'1']);
        $I->seeResponseContainsJson([]);
    }
}