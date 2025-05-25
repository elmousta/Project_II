<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password=Hash::make('20242025');
        $password=Hash::make('kbu2025');
        $userRecords = [
            [   'id'=>1,
                'first_name'=>'Moustapha ',
                'last_name'=>'Ewva',
                'username'=>'mewva@gmail.com',
                'password'=>$password,
                'birth_date'=>'2001-05-20',
                'permission'=>true,
                'image'=>'https://dar-alusool.com/image/cache/catalog/logo300-150x150.png'
            ],
            [   'id'=>2,
                'first_name'=>'Ahmet',
                'last_name'=>'Demir',
                'username'=>'ademir',
                'password'=>$password,
                'birth_date'=>'1970-05-20',
                'permission'=>false,
                'image'=>'https://img.a.transfermarkt.technology/portrait/big/395491-1661450812.jpg?lm=1'
            ],
            [   'id'=>3,
                'first_name'=>'Islami',
                'last_name'=>'Kitaplar',
                'username'=>'ikitaplar',
                'password'=>$password,
                'birth_date'=>'2013-05-20',
                'permission'=>false,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-sthiPvYKFawTZSX1_pg2Y060PYSdMlW1bzEUsfqsL4rMFaixLhhnF-ytQvffx7slgKE&usqp=CAU'
            ],
            [   'id'=>4,
                'first_name'=>'Souleyman',
                'last_name'=>'Ndoye',
                'username'=>'ndoye@manager.com',
                'password'=>$password,
                'birth_date'=>'2001-12-31',
                'permission'=>false,
                'image'=>'data:image/png;base64,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'
            ],
        ];
        User::insert($userRecords);
    }
}
