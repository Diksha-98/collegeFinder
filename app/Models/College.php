<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    public function cat()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category');
    }
    use HasFactory;
}
