<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slide extends Model
{
    use HasFactory;
    protected $table = "slide";

    protected $fillable = [
        'judul_slide','link', 'gambar', 'status', 'artikel_id'
    ];

    protected $hidden=[];

    /**
     * Get the user that owns the Artikel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artikel(): BelongsTo
    {
        return $this->belongsTo(Artikel::class, 'artikel_id', 'id');
    }
}
