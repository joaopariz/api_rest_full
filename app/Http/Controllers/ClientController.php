<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController extends Controller
{

    public function index() // Route primary
    {
        return Client::all();
    }



    public function store(Request $request) // Send to data base
    {
        $request->validate([
            'client' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
        ]);
    }

    public function show($id) // Bring data base info
    {
        return Client::findOrfail($id);
    }
}
