<?php

namespace Src\Station09;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $users = [
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'age' => 20,
                'password' => 'yamada',
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'password' => 'suzuki',
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'password' => 'sato',
            ],
        ];
        $full_names = array_map(function ($users) {
            return $users['last_name'] . $users['first_name'];
        }, $users);
        // print_r($full_names);
        foreach ($users as &$value) {
            $value['full_name'] = $value['last_name'] . $value['first_name'];
            if (!isset($value['age'])) {
                $value['age'] = null;
            }
            unset($value['password']);
        }
        print_r($users);
    }
}

(new Practice1())->main();
