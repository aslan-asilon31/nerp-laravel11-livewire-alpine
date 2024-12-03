<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
  use HasFactory;

  protected $table = 'res_banks';
  protected $primaryKey = 'id';
  protected $keyType = 'int';
  protected $fillable = [
    'status_id',
    'name',
    'parent_id',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at',
  ];

  protected $casts = [
    'desc' => 'array',
  ];

  public function status()
  {
    return $this->belongsTo(StatusMaster::class, 'status_id', 'id');
  }
}
