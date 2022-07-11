<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $collection = 'mobils';

    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function kendaraans() {
        return $this->belongsTo(Kendaraan::class);
    }
}
