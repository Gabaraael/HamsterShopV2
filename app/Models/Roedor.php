<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roedor extends Model
{
    use HasFactory;

    protected $table = 'roedor';
    public $timestamps = false;
}
