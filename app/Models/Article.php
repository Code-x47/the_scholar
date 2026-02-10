<?php

namespace App\Models;

use App\Models\MainJournal;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $casts = [
        'published_at' => 'datetime',
    ];
    
    public function issue(){
     return $this->belongsTo(Issue::class);
    }


    protected $fillable = ['title','abstract','content','pdf_path','published_at','status','issue_id','keywords'];

    public function authors(){
    
    return $this->belongsToMany(Author::class)
        ->withPivot(['author_order', 'is_corresponding'])
        ->orderBy('author_order');
    }


    public function references(){

     return $this->hasMany(Reference::class)
        ->orderBy('reference_order');
            
    }

    public function apaCitation(){

    $author = $this->authors->first();

    return sprintf(
        '%s, %s. (%s). %s. <em>%s</em>, <em>%s</em>(%s). https://doi.org/%s',
        $author->last_name,
        substr($author->first_name, 0, 1),
        $this->published_at?->format('Y'),
        $this->title,
        $this->issue->volume->journal->title,
        $this->issue->volume->volume_label,
        $this->issue->issue_number,
        $this->doi
    );
  }


}