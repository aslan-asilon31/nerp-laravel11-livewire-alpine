<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse extends Model
{
  use HasFactory;

  protected $table = 'res_warehouses';
  protected $primaryKey = 'id';
  protected $keyType = 'int';
  protected $fillable = [
    'status_id',
    'name',
    'workspace_id',
    'desc',
    'parent_id',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at',
  ];

  protected $casts = [
    'desc' => 'array',
  ];
}
