<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKendaraanRequest;
use App\Services\KendaraanService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    private $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->kendaraanService = $kendaraanService;
    }

    public function index(): JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->get());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function store(StoreKendaraanRequest $request): JsonResponse
    {
        try {
            $kendaraan = response()->json($this->kendaraanService->create($request));

            return response()->json($kendaraan);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
