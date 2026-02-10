<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    public function volumes(){
      
     return $this->hasMany(Volume::class);
        
    }


    protected $fillable = [
        'title',
        'slug',
        'description',
        'issn',
        'publisher',
        'lang',
        'is_active',
        'category_id',
    ];


}
