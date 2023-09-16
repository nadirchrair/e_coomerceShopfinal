<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['categorie_id',
    'name',
    'slug',
    'short_description',
    'description',
    'price',
    'selling_price',
    'image',
    'tax',
    'status',
    'trend',
    'meta_title',
    'meta_keywords',
    'meta_descrption',];

}