<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 

class testController extends Controller
{
    public function dataAPI()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        return $response->object();
    }
}
