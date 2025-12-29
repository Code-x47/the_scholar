<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainJournal extends Model
{
    protected $fillable = [
    'author', 'title', 'summary', 'file', 'date', 'email', 'phone', 'slug', 'volume', 'department','user_id'
];

}
