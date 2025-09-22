<?php

namespace Src\Station06;

class Practice1
{
    public function main(): void
    {
        // 初期の配列
        $array = ['red', 'blue', 'yellow'] ;
        // インデックス 0 に 'white' , インデックス 1 に 'black' を追加
        array_unshift($array, 'white', 'black');
        // 要素 'yellow' を削除
        array_pop($array);
        // 要素 'red' と 'blue' の間に 'green' を挿入
        array_splice($array,3,0,'green');
        print_r($array);
    }
}

(new Practice1())->main();
