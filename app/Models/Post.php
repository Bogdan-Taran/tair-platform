<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_firstname',
        'child_lastname',
        'child_patronymic',
        'child_birthday',
        'child_branch'
    ];
}
