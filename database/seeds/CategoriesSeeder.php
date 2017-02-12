<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Лікарські препарати'
            ],
            [
                'parent_id' => 1,
                'name' => 'Нервові препарати'
            ],
            [
                'parent_id' => 1,
                'name' => 'Судинні препарати'
            ],
            [
                'parent_id' => 1,
                'name' => 'Серцеві препарати'
            ],
            [
                'parent_id' => 1,
                'name' => 'Препарати для сну'

            ],[
                'parent_id' => 1,
                'name' => 'Вітаміни'
            ]
        ]);
        
    }
}
