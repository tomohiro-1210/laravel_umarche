<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainerTest(){
        $app = app();
        $app->bind('lifeCycleTest', function(){
            return 'ライフサイクルテスト';
        });
        $test = $app->make('lifeCycleTest');

        // サービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();

        // サービスコンテナありのパターン
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->running();

        dd($test);
    }
}
class Sample{
    public $message;
    public function __construct(Message $message){
        $this->message = $message;
    }
    public function run(){
        $this->message->send();
    }
    public function running(){
        $this->message->send2();
    }
}
class Message{
    public function send(){
        echo('メッセージを表示');
    }
    public function send2(){
        echo('メッセージを送信しました。<br>ご確認のほどお願いします。');
    }
}