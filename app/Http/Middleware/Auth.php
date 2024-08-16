<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;


class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $req, Closure $next): Response
    {   
        $ong = Session::get('ong');
        $professor = Session::get('professor');
        $responsavel = Session::get('responsavel');
        $aluno = Session::get('aluno');

        if ($professor || $responsavel || $aluno|| $ong) return $next($req);

        return redirect()->back();
    }
}
