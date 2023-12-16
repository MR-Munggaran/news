<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Materi extends Model
{
    use HasFactory;
    protected $table = "materi";

    protected $fillable = [
        'judul_materi','slug', 'deskripsi', 'link', 'gambar_materi', 'is_active','id'
    ];

    protected $hidden=[];

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
