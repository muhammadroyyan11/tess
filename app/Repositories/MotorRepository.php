<?php

namespace App\Repositories;

use App\Models\Motor;

class MotorRepository {

    protected $motor;

    public function __construct(Motor $motor)
    {
        $this->motor = $motor;
    }

    public function get(){
        return $this->motor->all();
    }
}
