<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    public $timestamps= false;

    protected $fillable = [
         'name',
         'link',
         'status',
    ];



    public function submenus(){
        return $this->hasMany('App\Models\SubMenuItem')->where('status','Enabled');
    }
}
