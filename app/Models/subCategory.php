<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id_category',
    ];

    public function category()
    {
        return $this->hasMany(category::class);
    }
}
