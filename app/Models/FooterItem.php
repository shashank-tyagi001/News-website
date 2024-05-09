<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterItem extends Model
{
    use HasFactory;

    public $timestamps= false;

    protected $fillable = [
         'name',
         'link',
         'status',
    ];

    public function subfooter(){
        return $this->hasMany('App\Models\SubFooterItem')->where('status','Enabled');
    }
    
}
