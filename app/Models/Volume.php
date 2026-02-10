<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{

    protected $fillable = ['volume_number','publication_year','journal_id','volume_label'];
    public function journal(){
     return $this->belongsTo(Journal::class);
    }

    public function issues(){
     return $this->hasMany(Issue::class);
    }

}
