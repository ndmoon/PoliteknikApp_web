<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function prodi() : BelongsTo
    {
        return $this->belongsTo(prodi::class,);
    }
}
