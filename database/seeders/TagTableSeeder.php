<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Models\Tag();
        $tag->nom = "#Sucrée";
        $tag->save();

        $tag2 = new \App\Models\Tag();
        $tag2->nom = "#Healthy";
        $tag2->save();

        $tag3 = new \App\Models\Tag();
        $tag3->nom = "#PetitDej";
        $tag3->save();
    }
}
