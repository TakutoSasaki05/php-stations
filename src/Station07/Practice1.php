<?php

namespace Src\Station07;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array1 = [1, 2, 3];
        $array2 = [4, 5];
        $sumArray = array_merge($array1, $array2);
        print_r($sumArray);
    }
}

(new Practice1())->main();
