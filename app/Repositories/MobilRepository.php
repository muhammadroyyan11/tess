<?php

namespace App\Repositories;

use App\Models\Mobil;

class MobilRepository {

    protected $mobil;

    public function __construct(Mobil $mobil)
    {
        $this->mobil = $mobil;
    }

    public function get(){
        return $this->mobil->all();
    }
}
