<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $collection = 'kendaraans';

    protected $fillable = [
        'tahun_keluaran',
        'warna',
        'harga',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function mobils() {
        return $this->hasMany(Mobil::class);
    }

    public function motors() {
        return $this->hasMany(Motor::class);
    }
}
