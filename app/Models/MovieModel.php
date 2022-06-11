<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class MovieModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'movie_models';

    protected $fillable = [
        'title',
        'movie_image'
    ];
}
