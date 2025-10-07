<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    protected $fillable = [
        'categories_name',
        'categories_description',
        'categories_status',
        'categories_created_date'
    ];

    public function computers()
    {
        return $this->hasMany(Computer::class, 'category_id');
    }
}
