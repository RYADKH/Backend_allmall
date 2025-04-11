<?php
namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Closure;

class HandleCors
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Ajouter les headers CORS pour React (localhost:3000)
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:3000'); // ✅ Remplace par ton frontend si nécessaire
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        $response->headers->set('Access-Control-Allow-Credentials', 'true');

        return $response;
    }
}
