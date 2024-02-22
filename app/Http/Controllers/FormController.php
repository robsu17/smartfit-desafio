<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    public function buscarDados(Request $request)
    {
        $route = $request->route();

        $response = Http::get('https://test-frontend-developer.s3.amazonaws.com/data/locations.json');
        $responseJson = $response->json();

        return $responseJson['locations'];
    }
}
