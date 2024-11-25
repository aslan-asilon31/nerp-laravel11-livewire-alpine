<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
  use HasFactory;

  protected $table = 'res_image'; 
  protected $primaryKey = 'id'; 
  protected $keyType = 'int'; 
  protected $fillable = [
    'name',
  ];


  public function products()
  {
      return $this->hasMany(Product::class, 'image_id', 'id');
  }

}
