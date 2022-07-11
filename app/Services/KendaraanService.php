<?php

namespace App\Services;

use App\Models\Kendaraan;
use App\Repositories\KendaraanRepository;

class KendaraanService
{
    protected $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function get()
    {
        return $this->kendaraanRepository->get();
    }

    public function create($request)
    {
        $kendaraan = $this->kendaraanRepository->create($request->all());
        $result = [];

        if ($kendaraan) {
            $result['status'] = 'sukses!';
            $result['data'] = $kendaraan;
        } else {
            $result['status'] = 'galat';
        }

        return $result;
    }
}
