<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all(); // ou o método que você usa para obter os cursos
        return view('user.ong.courses', compact('cursos'));
    }

    public function index_account()
    {
        $cursos = Curso::all(); // ou o método que você usa para obter os cursos
        return view('user.ong.account', compact('cursos'));
    }
    public function index_shows()
    {
        $cursos = Curso::all(); // ou o método que você usa para obter os cursos
        return view('ongs.shows', compact('cursos'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required|string|max:255',
            'Sobre' => 'nullable|string',
            'Horario' => ['required', 'regex:/^([01]\d|2[0-3]):([0-5]\d)$/'],
            'Dias' => 'nullable|string',
            'Id_Professor' => 'nullable|integer',
            'Foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'Itens_Aula' => 'nullable|string',
        ]);

        $curso = new Curso();
        $curso->Nome = $request->Nome;
        $curso->Sobre = $request->Sobre;
        $curso->Horario = $request->Horario;
        $curso->Dias = $request->Dias;
        $curso->Id_Professor = $request->Id_Professor;
        $curso->Itens_Aula = $request->Itens_Aula;

        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/cursos', $filename);
            $curso->Foto = $filename;
        }

        $curso->save();

        return redirect()->route('cursos.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nome' => 'required|string|max:255',
            'Sobre' => 'nullable|string',
            'Horario' => 'nullable|time',
            'Dias' => 'nullable|string',
            'Id_Professor' => 'nullable|integer',
            'Foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'Itens_Aula' => 'nullable|string',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->Nome = $request->Nome;
        $curso->Sobre = $request->Sobre;
        $curso->Horario = $request->Horario;
        $curso->Dias = $request->Dias;
        $curso->Id_Professor = $request->Id_Professor;
        $curso->Itens_Aula = $request->Itens_Aula;

        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/cursos', $filename);
            $curso->Foto = $filename;
        }

        $curso->save();

        return redirect()->route('cursos.index');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
