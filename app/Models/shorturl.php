<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shorturl extends Model
{
    use HasFactory;
    protected $fillable = ['original_url','short_url'];
}
