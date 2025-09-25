<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $array = [
            ['アザラシ','アライグマ'],
            ['ウサギ','ウシ','ウマ'],
            ['オオカミ','オットセイ']
        ];
        array_splice($array[2],0,2,$array[1]);
        array_splice($array[1],0,3,['イヌ','イルカ']);
        return $array;
    }
}
