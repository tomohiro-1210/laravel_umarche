<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showServiceProviderController extends Controller
{
    public function showServiceProviderTest(){
        // PWを解析不可能な文字列に変換
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');

        // サービスプロパイダーの中身を出力？
        $sample = app()->make('serviceProviderTest');


        // デバッグ出力
        dd($password, $encrypt->decrypt($password), $sample);
    }
}
