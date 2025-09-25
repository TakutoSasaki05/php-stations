<?php

namespace Src\Station08;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = [
            ['アザラシ','アライグマ'],
            ['ウサギ','ウシ','ウマ'],
            ['オオカミ','オットセイ']
        ];
        print_r($array);
        array_splice($array[2],0,2,$array[1]);
        print_r($array);
        array_splice($array[1],0,3,['イヌ','イルカ']);
        print_r($array);
    }
}

(new Practice())->main();
