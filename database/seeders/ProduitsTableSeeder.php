<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit= new \App\Models\Produit();
        $produit->nom = "Salade de riz";
        $produit->prix_ht = 12;
        $produit->description = "Une salade fraiche a emporter";
        $produit->temps_prep = 10;
        $produit->photo_principale = "saladederiz.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Choclate fudge cake";
        $produit->prix_ht = 10;
        $produit->description = "Une gourmandise a tout moment";
        $produit->temps_prep = 5;
        $produit->photo_principale = "cake.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Chorba Tunisienne";
        $produit->prix_ht = 8;
        $produit->description = "La fameuse Chorba";
        $produit->photo_principale = "chorba.jpg";
        $produit->temps_prep = 20;
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Cookies";
        $produit->prix_ht = 3;
        $produit->description = "Régalez vous avec un snack";
        $produit->temps_prep = 5;
        $produit->photo_principale = "cookies.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Cup Cake";
        $produit->prix_ht = 5;
        $produit->description = "Un cup cake des années 80";
        $produit->temps_prep = 5;
        $produit->photo_principale = "cupcake.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Grillade";
        $produit->prix_ht = 20;
        $produit->description = "Une grillade mixt maison";
        $produit->temps_prep = 20;
        $produit->photo_principale = "grillade.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Oat meal";
        $produit->prix_ht = 12;
        $produit->description = "Un snack healthy et gourmand";
        $produit->temps_prep = 15;
        $produit->photo_principale = "oatmeal.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Soupe au lentille";
        $produit->prix_ht = 12;
        $produit->description = "Meilleur soupe de la région";
        $produit->temps_prep = 15;
        $produit->photo_principale = "soupe.jpg";
        $produit->category_id = 2;
        $produit->save();

    }
}
