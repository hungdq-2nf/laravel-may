<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use MongoClient;
use App\User as User;

class UserController extends BaseController
{
    public function all()
    {
//        $users = \DB::collection('users')->get();
//        $users = \DB::connection('mongodb')->collection('users')->get();
        $users = User::all();
//        $users = User::find('5aeebf71a4429272abc75ec3');


//        $user = new User;
//        $user->name = 'Thuong Doan';
//        $user->save();

//        User::create(['name' => 'A5']);

        $users = User::first()->name;

        return $users;
    }

    public function getApi1()
    {
        $url = 'https://reqres.in';
        $listUsers = '/api/users?page=2';
        $url .= $listUsers;

        $dataJson = file_get_contents($url);

        echo '<br>$dataJson----<br>';
        echo '<pre>';
        print_r($dataJson);

        $dataObj = json_decode($dataJson);
        echo '<br>$dataObj----<br>';
        echo '<pre>';
        print_r($dataObj->page);

        $dataArr = json_decode($dataJson, true);
        echo '<br>$dataArr----<br>';
        echo '<pre>';
        print_r($dataArr['page']);
//        print_r($data);
//        print_r($data['userId']);
//        print_r(1);

        $dataArr2 = [
            0 => 'Abc',
            1 => [
                'name' => 'A1',
                'age' => '18'
            ]
        ];
        $dataArr3 = [
            1 => 'Abc',
            2 => '19'
        ];
        echo '<br>$dataArr2----<br>';
        echo '<pre>';
        print_r($dataArr2);

        $dataJson2 = json_encode($dataArr2);
        echo '<br>$dataJson2----<br>';
        print_r($dataJson2);

        $dataJson3 = json_encode($dataArr3);
        echo '<br>$dataJson3----<br>';
        echo $dataJson3;

    }
}
