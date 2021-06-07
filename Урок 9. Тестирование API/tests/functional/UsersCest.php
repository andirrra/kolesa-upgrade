<?php

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


        $userData = [
            'email' => 'upgrade1234@kolesa.kz',
            'owner' => 'upgrade',
            'job' => 'avtoelon',
            'name' => 'namename',
        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human',$userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status'=>'ok']);
        $I->sendGet('people',$userData);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);

    }

    /**
     * Проверяем негативный сценарий на создание пользователя без email
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */
    public function checkUnableUserWithoutEmailAndChettam(\FunctionalTester $I, Example $data)
    {
        $owner = $I->getFaker()->userName;
        $email = $I->getFaker()->email;

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human',[
            $data['email'] ? $email : null,
            $data['owner'] ? $owner : null,
        ]);
        $I->seeResponseContainsJson(['error' => 'Internal Server Error']);

    }

    protected function getDataForCreateUserNegative()
    {
        return[
           [ 'email' => true,
            'owner' => false,
            'errorText' => ['error' => 'Internal Server Error']
        ],
        [
            'email' => false,
            'owner' => true,
            'errorText' => ['error' => 'Internal Server Error'],
        ]
];
    }
}
