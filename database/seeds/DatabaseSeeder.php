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
                'link'=> '/good_category?id=',
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


        DB::table('type_of_goods')->insert([

            [

                'name' => 'Акціонний товар',

            ],
            [

                'name' => 'Оптовий товар',

            ],
            [

                'name' => 'Роздрібний товар',

            ],

        ]);

        DB::table('goods')->insert([

            [
                'type' => 1,
                'name' => 'Глицесед - КМП таблетки 0.1 г №50',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/glicesed.jpg',
                'price'=>42000000,
                'star'=>true
            ],
            [
                'type' => 1,
                'name' => 'Ливицитам 500 таблетки 500мг №60',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/livicitam.jpg',
                'price'=>42000,
                'star'=>true
            ],
            [
                'type' => 1,
                'name' => 'Валерианы настойка 25мг',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/valeriana.jpg',
                'price'=>42,
                'star'=>true
            ],
            [
                'type' => 1,
                'name' => 'Когнум таблетки 250 мг №50',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/kognum.jpg',
                'price'=>420,
                'star'=>true
            ],
            [
                'type' => 1,
                'name' => 'Новакаин дарница раствор для инъекций 0.5% 2мл №10',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/novakain.jpg',
                'price'=>4200,
                'star'=>true

            ],
            [
                'type' => 1,
                'name' => 'Валеріана',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/glicesed.jpg',
                'price'=>42000000,
                'star'=>true
            ],





            [
                'type' => 2,
                'name' => 'Глицесед - КМП таблетки 0.1 г №50',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/glicesed.jpg',
                'price'=>42000000,
                'star'=>true
            ],
            [
                'type' => 2,
                'name' => 'Ливицитам 500 таблетки 500мг №60',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/livicitam.jpg',
                'price'=>42000,
                'star'=>true
            ],
            [
                'type' => 2,
                'name' => 'Валерианы настойка 25мг',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/valeriana.jpg',
                'price'=>42,
                'star'=>true
            ],
            [
                'type' => 2,
                'name' => 'Когнум таблетки 250 мг №50',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/kognum.jpg',
                'price'=>420,
                'star'=>true
            ],
            [
                'type' => 2,
                'name' => 'Новакаин дарница раствор для инъекций 0.5% 2мл №10',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/novakain.jpg',
                'price'=>4200,
                'star'=>true

            ],
            [
                'type' => 2,
                'name' => 'Валеріана',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/glicesed.jpg',
                'price'=>42000000,
                'star'=>true
            ],




            [
                'type' => 3,
                'name' => 'Глицесед - КМП таблетки 0.1 г №50',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/glicesed.jpg',
                'price'=>42000000,
                'star'=>true
            ],
            [
                'type' => 3,
                'name' => 'Ливицитам 500 таблетки 500мг №60',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/livicitam.jpg',
                'price'=>42000,
                'star'=>true
            ],
            [
                'type' => 3,
                'name' => 'Валерианы настойка 25мг',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/valeriana.jpg',
                'price'=>42,
                'star'=>true
            ],
            [
                'type' => 3,
                'name' => 'Когнум таблетки 250 мг №50',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/kognum.jpg',
                'price'=>420,
                'star'=>true
            ],
            [
                'type' => 3,
                'name' => 'Новакаин дарница раствор для инъекций 0.5% 2мл №10',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/novakain.jpg',
                'price'=>4200,
                'star'=>true

            ],
            [
                'type' => 3,
                'name' => 'Валеріана',
                'category'=>3,
                'articul'=>'11244234',
                'photo'=>'/img/glicesed.jpg',
                'price'=>42000000,
                'star'=>true
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
