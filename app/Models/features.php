<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class features extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price'];
    protected $table = 'features';

    public static function getAllProducts()
    {
        return features::all();
    }

    public static function addProduct($data)
    {
        return features::create($data);
    }
}
