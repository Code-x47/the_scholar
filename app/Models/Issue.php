<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

    protected $fillable = ['issue_number','title','publication_date','status','volume_id'];    

    public function volume(){
      return $this->belongsTo(Volume::class);
    }

    public function articles(){
      return $this->hasMany(Article::class);
    }

     protected $casts = [
        'publication_date' => 'date',
    ];

}
