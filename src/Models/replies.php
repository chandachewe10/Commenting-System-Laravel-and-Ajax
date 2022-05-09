<?php

namespace Chandachewe\Comments\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class replies extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullnames',
        'replies',
        'comments_id',
    ];
}
