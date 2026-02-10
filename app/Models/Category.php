<?php

namespace App\Models;

use App\Models\Journal;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name','description'];
    
    public function journals() {
        return $this->hasMany(Journal::class);
    }

    
}
