<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function index()
    {
        $response = Http::withToken('token-dummy-nanti-jwt-asli')
            ->get('http://localhost:8080/api/data');

        return view('data', [
            'data' => $response->json(),
        ]);
    }
}
