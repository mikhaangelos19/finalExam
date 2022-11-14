<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_laporan_id',
        'judul_laporan',
        'kepada_id',
        'isi',
        'gambar',
        'author_id',
    ];

    public function tembusans() {
        return $this->hasManyThrough(User::class, Tembusan::class,
        'post_id',
        'id',
        'id',
        'user_id');
    }

    public function jenis_laporan() {
        return $this->belongsTo(JenisLaporan::class);
    }

    public function kepada() {
        return $this->belongsTo(User::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function nomor_laporan() {
        return $this->hasOne(NomorLaporan::class);
    }
}
