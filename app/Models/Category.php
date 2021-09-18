<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function college()
    {
        return $this->hasMany('App\Models\College', 'category', 'id');
    }
    use HasFactory;
}
