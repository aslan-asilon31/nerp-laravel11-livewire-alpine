<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
  use HasFactory;

  protected $table = 'res_regions';
  protected $primaryKey = 'id';
  protected $keyType = 'int';
  protected $fillable = [
    'status_id',
    'name',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at',
  ];

  protected $casts = [
    'desc' => 'array',
  ];
}
