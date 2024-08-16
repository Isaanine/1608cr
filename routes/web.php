<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\OngController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\SearchController;


// Paginas padrão
Route::get('/', function () {
    return view('user/index');
});
Route::get('/donates', function () {
    return view('user/doacoes');
});
Route::get('/ongs', function () {
    return view('user/ongs');
});
Route::get('/ongs/{Id_Ong}', [OngController::class, 'show'])->name('ongs.show');
Route::get('ongs/show', [CursoController::class, 'index_show']);

// Registro, Login e Logout
Route::get('/signin', function () {
    return view('user/signIn');
});
Route::post('/login', [LoginController::class, 'login']);
Route::get('/signup', function () {
    return view('user/signUp');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// Ong
Route::get('/ong/signup', function () {
    return view('user/ong/signUp');
});

Route::get('/ong/account', [CursoController::class, 'index_account']);//->middleware(\App\Http\Middleware\Auth::class);
Route::get('/ong/courses', function () {
    return view('user/ong/courses');
});//->middleware(\App\Http\Middleware\Auth::class);
Route::get('/ong/mural', function () {
    return view('user/ong/mural');
})->middleware(\App\Http\Middleware\Auth::class);
Route::get('/ong/volunteer', function () {
    return view('user/ong/volunteer');
})->middleware(\App\Http\Middleware\Auth::class);

//Curso CRUD
Route::get('/ong/courses', [CursoController::class, 'index'])->name('cursos.index');
Route::resource('cursos', CursoController::class);
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');


// Aluno
Route::get('/aluno/signup', function () {
    return view('user/aluno/signUp');
});
Route::post('/createaluno', [AlunoController::class, 'create']);
Route::get('/aluno/account', function () {
    return view('user.aluno.account');
})->middleware(\App\Http\Middleware\Auth::class);
Route::get('/aluno/mural', function () {
    return view('user.aluno.mural');
})->middleware(\App\Http\Middleware\Auth::class);
Route::get('/aluno/list', function () {
    return view('user.aluno.list');
})->middleware(\App\Http\Middleware\Auth::class);
Route::get('/aluno/chat', function () {
    return view('user.aluno.chat');
})->middleware(\App\Http\Middleware\Auth::class);


// Professor
Route::get('/prof/signup', function () {
    return view('user/prof/signUp');
});
Route::post('/createprofessor', [ProfessorController::class, 'create']);
Route::get('/prof/account', function () {
    return view('user.prof.account');
})->middleware(\App\Http\Middleware\Auth::class);

Route::get('/prof/mural', function () {
    return view('user.prof.mural');
})->middleware(\App\Http\Middleware\Auth::class);

Route::get('/prof/list', function () {
    return view('user.prof.list');
})->middleware(\App\Http\Middleware\Auth::class);
Route::get('/prof/chat', function () {
    return view('user.prof.chat');
})->middleware(\App\Http\Middleware\Auth::class);

Route::get('/prof/notas', function () {
    return view('user.prof.notas');
})->middleware(\App\Http\Middleware\Auth::class);

Route::post('/professor/store', [ProfessorController::class, 'store'])->name('professor.store');
Route::get('/prof/{id}/edit', [ProfessorController::class, 'edit'])->name('professores.edit');
Route::put('/professores/{id}', [ProfessorController::class, 'update'])->name('professores.update');

// Admin
Route::get('/admin', function () {
    return view('admin/adminPage');
});
Route::get('/aprovarong', function () {
    return view('admin/aprovarOng');
});


Route::get('/search', [SearchController::class, 'search'])->name('search');