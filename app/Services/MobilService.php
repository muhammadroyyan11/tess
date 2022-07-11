<?php

namespace App\Services;

use App\Repositories\MobilRepository;

class MobilService
{
    protected $mobilRepository;

    public function __construct(MobilRepository $mobilRepository)
    {
        $this->mobilRepository = $mobilRepository;
    }

    public function get()
    {
        return $this->mobilRepository->get();
    }
}
