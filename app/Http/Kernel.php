protected $routeMiddleware = [
    // otros middlewares
    'role' => \App\Http\Middleware\RoleMiddleware::class,  // Asegúrate de que el middleware esté aquí
];
