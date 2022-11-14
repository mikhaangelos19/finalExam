<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorLaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'jenis_laporan_id',
        'nomor_laporan'
    ];

    public function users() {
        $this->belongsTo(User::class);
    }

    public function jenis_laporans() {
        $this->belongsTo(JenisLaporan::class);
    }
}
