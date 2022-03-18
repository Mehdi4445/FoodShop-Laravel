<?php

namespace App\Models;

use App\Models\Produit;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function parent() {
        return $this->belongsTo('App\Models\Category');
    }

    public function enfants() {
        return $this->hasMany('App\Models\Category','parent_id');
    }

    public function produitsParent(){

        return $this->hasMany('App\Models\Produit');

    }

    public function prodEnf(){

        return $this->hasManyThrough('App\Models\Produit', 'App\Models\Category', 'parent_id', 'category_id');
    }

    public function produits(){

        $produits = $this->produitsParent()->get()->merge($this->prodEnf()->get());
        return $produits;
    }


}
