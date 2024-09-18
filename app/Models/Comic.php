<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'series',
        'slug',
        'issue_number',
        'summary',
        'cover_image',
        'release_date',
        'page_count',
        'price',
    ];
}
