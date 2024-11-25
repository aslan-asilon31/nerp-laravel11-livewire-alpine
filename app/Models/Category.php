<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'res_categories'; 
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
