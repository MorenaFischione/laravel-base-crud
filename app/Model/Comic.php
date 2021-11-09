<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use SoftDeletes;
    //La lista dei campi considerati da fill
    protected $fillable= ['title', 'author', 'description', 'url'];
    
}


