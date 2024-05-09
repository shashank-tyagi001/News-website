<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubFooterItem extends Model
{
    use HasFactory;

    public $timestamps= false;
    protected $fillable = [
        'name',
        'footer_item_id',
        'link',
        'status',
   ];
}
