<?php

namespace Src\Station03;

class Question
{
    public function main(mixed $arg): string
    {
        if($arg === 1){
            return 'りんご';
        }else if($arg === 2){
            return 'みかん';
        }else if($arg === 3){
            return 'みかん';
        }else{
            return 'さくらんぼ';
        }
    }
}
