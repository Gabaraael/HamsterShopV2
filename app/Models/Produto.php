<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Produto extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'produto';

    public function categoria(): BelongsTo
    {
       return $this->belongsTo(Categoria::class);
    }

    public function estoque(): BelongsTo
    {
       return $this->belongsTo(Estoque::class);
    }

    public function roedor()
    {
        return $this->belongsTo(Roedor::class);
    }



}