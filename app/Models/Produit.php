<?php

namespace App\Models;


use App\Models\Tag;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravelista\Comments\Commentable;

class Produit extends Model
{
    use HasFactory;

    use Commentable;

    private static $facteur_tva = 1.19;

    public function category(){

        return $this->belongsTo("App\Models\Category");
    }

    public function tags(){

        return $this->belongsToMany("App\Models\Tag");

    }

    
    public function recommandations(){

        return $this->belongsToMany("App\Models\Produit", "produit_recommande", "produit_id", "produit_recommande_id");

    }

    public function prixTTC(){

        $prix_ttc = $this->prix_ht * self::$facteur_tva;
        return number_format($prix_ttc,2);
    }


}
