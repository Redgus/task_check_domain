<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client as ClientModel;

class Client extends Controller
{
    public function store()
    {
        return view('client', ['all' => ClientModel::all()]);
    }

    public function create(Request $req)
    {
        $validate = $req->validate([
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'telephone' => ['required', 'max:255']
        ]);

        ClientModel::create($validate);

        return back();
    }
}
