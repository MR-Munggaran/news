<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Artikel extends Model
{
    use HasFactory;
    protected $table = "artikel";

    protected $fillable = [
        'judul','slug', 'content', 'kategori_id', 'user_id', 'is_active', 'views', 'gambar'
    ];

    protected $hidden=[];

    /**
     * Get the user that owns the Artikel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
    /**
     * Get the user that owns the Artikel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public static function relatedPosts($slug)
    {
        $currentArticle = self::where('slug', $slug)->first();
    
        return self::where('kategori_id', $currentArticle->kategori_id)
            ->where('slug', '!=', $slug) // Exclude current article
            ->limit(2) // Limit the number of related posts
            ->get();
    }
    public function getFormattedCreatedAtAttribute()
    {
        // Tanggal dan waktu yang ingin dihitung selisihnya
        $waktuDibuat = Carbon::parse($this->attributes['created_at']);

        // Hitung selisih waktu
        $selisihMenit = $waktuDibuat->diffInMinutes(now());

        // Format waktu sesuai kebutuhan
        if ($selisihMenit < 60) {
            return $selisihMenit . ' MIN AGO';
        } elseif ($selisihMenit < 1440) {
            return $waktuDibuat->diffInHours(now()) . ' HOURS AGO';
        } else {
            return $waktuDibuat->diffInDays(now()) . ' DAYS AGO';
        }
    }
    
}
