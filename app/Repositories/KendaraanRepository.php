<?php

namespace App\Repositories;

use App\Models\Kendaraan;

class KendaraanRepository {
    protected $kendaraan;

    public function __construct(Kendaraan $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    public function get(){
        return $this->kendaraan->all();
    }

    public function create($kendaraan)
    {
        $kendaraan = Kendaraan::create($kendaraan);

        return $kendaraan;
    }
}
