<?php
// app/Http/Middleware/CheckDocente.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckDocente
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || !auth()->user()->isDocenteOrAdmin()) {
            abort(403, 'No tienes permisos de docente');
        }

        return $next($request);
    }
}
