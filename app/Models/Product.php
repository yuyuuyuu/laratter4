<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function users()
    {
      return $this->belongsToMany(User::class)->withTimestamps();
    }
    
    protected $guarded = [
    'id',
    'created_at',
    'updated_at',
  ];
}
