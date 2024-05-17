<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function Categorie(){
        return $this->belongsTo(Categorie::class, 'id_categories');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_users');
    }
}
