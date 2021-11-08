<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //La lista dei campi considerati da fill
    protected $fillable= ['title', 'author', 'description', 'url'];
    
}


