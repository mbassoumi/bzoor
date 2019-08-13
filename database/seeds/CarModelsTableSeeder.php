<?php

use Illuminate\Database\Seeder;

class CarModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('car_models')->delete();

        \Illuminate\Support\Facades\DB::table('car_models')->insert([
            [
                'id' => 1,
                'parent_id' => null,
                'en_name' => 'Parent Car',
                'ar_name' => 'السيارة الأم',
            ],
        ]);
        \Illuminate\Support\Facades\DB::table('car_models')->insert([
            [
                'parent_id' => 1,
                'en_name' => 'Sub Car 1',
                'ar_name' => 'السيارة الفرع الاولى',
            ],
            [
                'parent_id' => 1,
                'en_name' => 'Sub Car 2',
                'ar_name' => 'السيارة الفرع الثانية',
            ],
            [
                'parent_id' => 1,
                'en_name' => 'Sub Car 3',
                'ar_name' => 'السيارة الفرع الثالثة',
            ],

        ]);
    }
}
