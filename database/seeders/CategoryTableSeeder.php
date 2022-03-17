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
        $category->nom = "Snack";
        $category->is_online = "1";
        $category->save();

        $category2= new \App\Models\Category();
        $category2->nom = "Diner";
        $category2->is_online = "1";
        $category2->save();

        $category3= new \App\Models\Category();
        $category3->nom = "Déjeuner";
        $category3->is_online = "1";
        $category3->save();

        $category4= new \App\Models\Category();
        $category4->nom = "Petit-déj";
        $category4->is_online = "1";
        $category4->save();

    }
}
