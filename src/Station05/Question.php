<?php

namespace Src\Station05;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $count = 0;
        foreach($array as $value){
            if($value >= 8){
                echo '処理を中断します' . PHP_EOL;
                break;
            }
            if($value % 4 > 2){
            }else{
                $count += $value;
            }
        }
        return $count;
    }
}
