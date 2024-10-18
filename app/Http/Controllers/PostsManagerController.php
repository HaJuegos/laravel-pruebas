<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostsManagerController extends Controller
{
    public function index()
    {
        return view('CrearPost');
    }

    public function resultadosIndex(Request $rqs)
    {
        User::create([
            'id' => $rqs->input('idUser'),
            'name' => $rqs->input('nameUser'),
            'email' => $rqs->input('emailUser'),
            'password' => $rqs->input('passUser'),
        ]);

        return redirect()
            ->back()
            ->with('userComplete', 'Se ha guardado este usuario');
    }
}
