<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Admin extends Controller
{
    public function getOng()
    {
        // Obtendo todas as ONGs do banco de dados
        $ongs = Ong::all();

        // Passando as ONGs para a view
        return view('admin.adminPage', compact('ongs'));
    }

    public function deleteOng($id_ong)
    {
        $ong = Ong::where('Id_Ong', $id_ong);

        if ($ong) {
            $ong->delete();
            return redirect()->back();
        } else {
            echo "erro";
        }
    }
    public function searchOngs(Request $request)
    {
        $email = $request->input('email');

        // Filtra ONGs pelo email fornecido
        $ongs = Ong::where('Email', 'LIKE', '%' . $email . '%')->get();

        return view('admin.adminPage', ['ongs' => $ongs]);
    }

    // Arrumar
    public function showOng($Id_Ong)
    {
        $ong = Ong::where('Id_Ong', $Id_Ong)->firstOrFail();
        return view('user.ong.account', ['ong' => $ong]);
    }
}
