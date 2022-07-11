<?php

namespace App\Services;

use App\Repositories\MotorRepository;

class MotorService
{
    protected $motorRepository;

    public function __construct(MotorRepository $motorRepository)
    {
        $this->motorRepository = $motorRepository;
    }

    public function get()
    {
        return $this->motorRepository->get();
    }
}
