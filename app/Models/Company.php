<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{

  use HasFactory;
  protected $keyType = 'string';
  protected $table = 'res_companies';

  protected $fillable = [
    'name',
    'desc',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at'
  ];
}
