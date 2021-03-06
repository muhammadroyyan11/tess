<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $collection = 'mobils';

    protected $fillable = [
        'mesin',
        'kepasitas_penumpang',
        'tipe',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function kendaraans() {
        return $this->belongsTo(Kendaraan::class);
    }
}
