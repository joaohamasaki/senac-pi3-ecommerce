<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    // caso queria criar inserir dentro fillable deve criar migration de desconto!
    protected $fillable = ['name', 'description', 'price', 'category_id', 'image'];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public static function promocoes(){
        return Product::all()->take(9);
    }
}

