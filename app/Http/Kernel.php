protected $routeMiddleware = [
    // ... otros middlewares
    'admin' => \App\Http\Middleware\CheckAdministrador::class,
    'docente' => \App\Http\Middleware\CheckDocente::class,
    'estudiante' => \App\Http\Middleware\CheckEstudiante::class,
];