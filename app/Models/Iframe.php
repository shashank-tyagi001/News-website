<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iframe extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = [
      'iframe',
      'link',
    ];
}
