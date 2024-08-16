<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfessorController
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $senha = $req->input('Senha');
        $c_senha = $req->input('C_Senha');
        $validator = Validator::make($req->all(), [
            'Nome' => 'required|string|max:255',
            'CPF' => 'required|string|size:14|unique:professores,cpf',
            'Nascimento' => 'required|date',
            'Telefone' => 'nullable|string|max:15',
            'Formacao' => 'nullable|string|max:255',
            'Email' => 'required|email|unique:professores,email',
            'Senha' => 'required|string|min:8',
            'C_Senha' => 'required|string|same:Senha',
        ], [
            'Nome.required' => 'O campo nome deve ser preenchido',
            'CPF.required' => 'O campo CPF deve ser preenchido',
            'CPF.size' => 'O campo CPF deve ter exatamente :size caracteres',
            'Nascimento.required' => 'O campo data de nascimento deve ser preenchido',
            'Email.required' => 'O campo email deve ser preenchido',
            'Email.email' => 'O campo email deve ser um endereço de e-mail válido',
            'Email.unique' => 'O e-mail informado já está em uso',
            'Senha.required' => 'O campo senha deve ser preenchido',
            'Senha.min' => 'A senha deve ter pelo menos :min caracteres',
            'C_Senha.required' => 'O campo confirmação de senha deve ser preenchido',
            'C_Senha.same' => 'A confirmação da senha não coincide com a senha',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();


        $professor = new Professor();
        $professor->Nome = $req->input('Nome');
        $professor->CPF = $req->input('CPF');
        $professor->Nascimento = $req->input('Nascimento');
        $professor->Telefone = $req->input('Telefone');
        $professor->Formacao = $req->input('Formacao');
        $professor->Email = $req->input('Email');
        $professor->Senha = Hash::make($req->input('Senha'));

        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);


        $professor->save();
        Session::put('professor', $professor);
        return redirect('/prof/account');
    }
    public function show($Id_Professor)
    {
        // Busca o professor pelo ID
        $professor = Professor::findOrFail($Id_Professor);

        // Retorna a view com os dados do professor
        return view('professor.show', compact('professor'));
    }
}
