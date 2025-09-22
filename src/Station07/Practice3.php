<?php

namespace Src\Station07;

class Practice3
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array1 = ['北海道' => 1, '東京都' => 13, '大阪府' => 'XX'];
        $array2 = ['広島県' => 34, '京都府' => 26];
        $array3 = ['京都府' => 'XX', '大阪府' => 27];
        $sumArray = array_merge($array1, $array3, $array2);
        print_r($sumArray);
    }
}

(new Practice3())->main();
