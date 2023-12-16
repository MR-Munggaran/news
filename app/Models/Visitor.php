<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    public $attributes = [ 'hits' => 0 ];
    protected $table = 'visitors';

    protected $fillable = ['ip', 'hits', 'visit_date'];
    public $timestamps = false;
    protected $hidden=[];
    public static function hit()
    {
        $visitor = self::where('ip', request()->ip())->first();

        if (!$visitor) {
            self::create([
                'ip'         => request()->ip(),
                'hits'       => 1,
                'visit_date' => now(),
            ]);
        } else {
            $visitor->increment('hits');

            // Jika tanggal kunjungan berbeda, tambahkan entri baru
            $visitDate = date_create($visitor->visit_date);
            if (date_format($visitDate, 'd') != date('d')) {
                self::create([
                    'ip'         => request()->ip(),
                    'hits'       => 1,
                    'visit_date' => now(),
                ]);
            }
        }
    }

}
