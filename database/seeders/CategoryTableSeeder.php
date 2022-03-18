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
        /*$category= new \App\Models\Category();
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
        $category4->save();*/

        $category5= new \App\Models\Category();
        $category5->nom = "Cake";
        $category5->is_online = 1;
        $category5->parent_id = 1;
        $category5->save();

        $category6= new \App\Models\Category();
        $category6->nom = "Céréale";
        $category6->is_online = 1;
        $category6->parent_id = 4;
        $category6->save();

        $category7= new \App\Models\Category();
        $category7->nom = "Cookies";
        $category7->is_online = 1;
        $category7->parent_id = 1;
        $category7->save();

        $category8= new \App\Models\Category();
        $category8->nom = "Soupe";
        $category8->is_online = 1;
        $category8->parent_id = 2;
        $category8->save();

        $category9= new \App\Models\Category();
        $category9->nom = "Salade";
        $category9->is_online = 1;
        $category9->parent_id = 3;
        $category9->save();

        $category10= new \App\Models\Category();
        $category10->nom = "Grillade";
        $category10->is_online = 1;
        $category10->parent_id = 3;
        $category10->save();

        $category11= new \App\Models\Category();
        $category11->nom = "Tunisien";
        $category11->is_online = 1;
        $category11->parent_id = 3;
        $category11->save();

        $category12= new \App\Models\Category();
        $category12->nom = "Viennoiserie";
        $category12->is_online = 1;
        $category12->parent_id = 4;
        $category12->save();

    }
}
