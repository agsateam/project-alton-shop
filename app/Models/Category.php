<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id_sub_category',
    ];

    public function subCategory()
    {
        return $this->hasMany(subCategory::class);
    }
}
