<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'Quantity',
        'Category',
        'Thumbnail',
        'Image1',
        'Image2',
        'Image3',
        'Rating',
        'Review',
        'Brand',
    ];
}
