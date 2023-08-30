<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartiSatker;
use App\Http\Resources\PartiSatkerResource;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class PartiSatkerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {

        $data = PartiSatker::find(5);

        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }

    public function getNKA(Request $request)
    {
        if ($request->all()) {
            $kdsatker = $request->all();
        } else {
            return response()->json([
                'status' => 'fail',
                'message' => 'invalid parameters',
            ]);
        }

        $data = PartiSatker::select(
            'kdsatker',
            'nmsatker',
            'penyerapan',
            'konsistensi',
            'keluaran as cro',
            'efisiensi',
            'nilai_kinerja as nka_satker',
        )->where('kdsatker', $kdsatker)->get();

        if ($data->count() > 0) {
            return response()->json([
                'status' => 'success',
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => 'fail',
                'message' => 'no data',
            ]);
        }
    }
}
