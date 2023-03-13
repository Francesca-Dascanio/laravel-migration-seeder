<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importo model
use  App\Models\Train;
use Database\Seeders\TrainTableSeeder;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('departure_date', '>=', '2023-03-13')->get();
        // dd($trains);

        return view('welcome', [
            'trains' => $trains
        ]);
    }
}
