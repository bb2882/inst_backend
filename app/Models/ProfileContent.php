<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileContent extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'profile'];
}
