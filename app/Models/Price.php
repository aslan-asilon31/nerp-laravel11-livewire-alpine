<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Price extends Model
{
  use HasFactory;

  protected $table = 'res_prices'; 
  protected $primaryKey = 'id'; 
  protected $keyType = 'int'; 
  protected $fillable = [
    'name',
  ];


  public function products()
  {
    return $this->belongsTo(Price::class, 'price_id', 'id');
  }

}
