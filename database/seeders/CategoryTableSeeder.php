<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category= new \App\Models\Category();
        $category->nom = "snack";
        $category->is_online = "1";
        $category->save();

        $category2= new \App\Models\Category();
        $category2->nom = "diner";
        $category2->is_online = "1";
        $category2->save();

        $category3= new \App\Models\Category();
        $category3->nom = "dejeuner";
        $category3->is_online = "1";
        $category3->save();

        $category4= new \App\Models\Category();
        $category4->nom = "petit_dej";
        $category4->is_online = "1";
        $category4->save();

    }
}
