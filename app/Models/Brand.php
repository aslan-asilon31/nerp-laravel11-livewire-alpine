<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
  use HasFactory;

  protected $table = 'res_brands';
  protected $primaryKey = 'id';
  protected $keyType = 'int';
  protected $fillable = [
    'status_id',
    'image',
    'name',
    'workspace_id',
    'desc',
    'created_by',
    'updated_by',
    'parent_id',
    'created_at',
    'updated_at',
  ];

  protected $casts = [
    'desc' => 'array',
  ];
}
