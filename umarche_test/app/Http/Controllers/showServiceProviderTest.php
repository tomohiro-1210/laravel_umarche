<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showServiceProviderTest extends Controller
{
    public function showServiceProviderTest(){
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');
        dd($password, $encrypt->decrypt($password));
    }
}
