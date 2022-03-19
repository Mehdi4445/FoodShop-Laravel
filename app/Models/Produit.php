<?php

namespace App\Models;


use App\Models\Tag;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo("App\Models\Category");
    }

    public function tags(){

        return $this->belongsToMany("App\Models\Tag");

    }

    
    public function recommandations(){

        return $this->belongsToMany("App\Models\Produit", "produit_recommande", "produit_id", "produit_recommande_id");

    }



}
