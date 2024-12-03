<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialAccount extends Model
{
  use HasFactory;

  protected $table = 'social_accounts';
  protected $primaryKey = 'id';
  protected $keyType = 'int';
  protected $fillable = [
    'user_id',
    'provider_id',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at',
  ];

  protected $casts = [
    'desc' => 'array',
  ];
}
