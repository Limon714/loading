<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class BrandController extends Controller
{
    public function Brandlist():JsonResponse
    {

    $data = Brand::all();
    return ResponseHelper::Out('success',$data, 200);
}
}