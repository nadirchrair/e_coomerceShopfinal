<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Categorie extends Model
{    use HasTranslations;

    use HasFactory;
    protected $fillable = ['name','slug','description','image','is_shopping','is_popular','meta_title','meta_description','meta_keywords'];
    public $translatable = ['name','description','meta_title','meta_description'];

}