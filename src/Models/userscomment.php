<?php

namespace Chandachewe\Comments\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userscomment extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullnames',
        'comments',
    ];
        
    
}
