<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importo model
use  App\Models\Train;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();
        // dd($trains);

        return view('welcome', [
            'trains' => $trains
        ]);
    }
}
