<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Лікарські препарати',
                'link'=> '/good?id=123456',
                'icon'=>'fa-plus-square'
            ],
            [
                'parent_id' => 0,
                'name' => 'Електроніка',
                'link'=> '/good?id=123456',
                'icon'=>'fa-usb'
            ],
            [
                'parent_id' => 1,
                'name' => 'Нервові препарати',
                'link'=> '/good?id=123456',
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Судинні препарати',
                'link'=> '/good?id=123456',
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Серцеві препарати',
                'link'=> '/good?id=123456',
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Препарати для сну',
                'link'=> '/good?id=123456',
                'icon'=>''

            ],[
                'parent_id' => 1,
                'name' => 'Вітаміни',
                'link'=> '/good?id=123456',
                'icon'=>''
            ]
        ]);




        DB::table('goods')->insert([

            [
                'type' => 2,
                'name' => 'Когнум',
                'category'=>2
            ],
            [
                'type' => 1,
                'name' => 'Kognum',
                'category'=>2
            ],
            [
                'type' => 1,
                'name' => 'Kognum',
                'category'=>2
            ],
            [
                'type' => 1,
                'name' => 'Kognum',
                'category'=>2
            ],
            [
                'type' => 1,
                'name' => 'Kognum',
                'category'=>2

            ],
            [
                'type' => 1,
                'name' => 'Валеріана',
                'category'=>2
            ]
        ]);


        DB::table('admin_categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Користувачі',
                'icon'=> 'fa-users',
                'link'=> '/admin'
            ],
            [
                'parent_id' => 1,
                'name' => 'Реєстрація',
                'icon'=> 'fa-registered',
                'link'=> '/admin/customers_registration'
            ],
            [
                'parent_id' => 0,
                'name' => 'Товари',
                'icon'=> 'fa-gift',
                'link'=> '/admin'
            ],
            [
                'parent_id' => 3,
                'name' => 'Додати товар',
                'icon'=> 'fa-envelope','link'=> '/admin/add_good'
            ],
            [
                'parent_id' => 0,
                'name' => 'Замовлення',
                'icon'=> 'fa-envelope',
                'link'=> '/admin'

            ],
            [
                'parent_id' => 0,
                'name' => 'Реклама',
                'icon'=> 'fa-bullhorn',
                'link'=> '/admin'
            ],
            [
                'parent_id' => 0,
                'name' => 'Партнери',
                'icon'=> 'fa-thumbs-o-up',
                'link'=> '/admin'
            ]
        ]);
    }
}
