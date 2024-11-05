<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'qty', 'price', 'categorie_id', 'description'];
    public function categorie(): HasMany
    {
        return $this->hasMany(Categorie::class ,'categorie_id');
    }
}
