<?php
// app/Http/Middleware/CheckAdministrador.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdministrador
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || !auth()->user()->isAdministrador()) {
            abort(403, 'No tienes permisos de administrador');
        }

        return $next($request);
    }
}