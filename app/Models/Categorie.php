<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function blog(){
        return $this->hasMany(Blog::class, "id_categories");
    }
}
