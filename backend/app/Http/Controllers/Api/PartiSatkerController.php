<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartiSatker;
use App\Http\Resources\PartiSatkerResource;

class PartiSatkerController extends Controller
{
    public function index()
    {
        $data = PartiSatker::find(5);
        return new PartiSatkerResource(true,'list data nka',$data);
    }

    

    

    
}
