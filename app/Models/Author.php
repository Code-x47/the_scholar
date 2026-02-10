<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
       protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'orcid',
        'country'
         ];



        public function articles(){
            return $this->belongsToMany(Article::class);
        }

}
