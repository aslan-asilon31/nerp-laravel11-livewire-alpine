<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

  use HasFactory;
  protected $keyType = 'string';
  protected $table = 'product_sales';

  protected $fillable = [
    // 'product_variant_id',
    // 'product_review_id',
    // 'status_id',
    // 'brand_id',
    // 'price_id',
    // 'cat_id',
    // 'image_id',
    'name',
    // 'workspace_id',
    // 'desc'
  ];
}
