<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id_category',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
